import { useState } from "react"
import { Button } from "@/components/ui/button"
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { loginRequest } from "../../services/authService"

const LoginCard = () => {

    const [email, setEmail] = useState("")
    const [password, setPassword] = useState("")
    const [loading, setLoading] = useState(false)
    const [error, setError] = useState("")

    const handelSubmit = async (e) => {
        e.preventDefault()
        setLoading(true);
        setError("")

        try {
            const data = await loginRequest({ email, password })

            localStorage.setItem("token", data.token)
            localStorage.setItem("user", JSON.stringify(data.user))
            window.location.href = "/dashboard"
        } catch (error) {
            setError(error.message)
        } finally {
            setLoading(false)
        }
    }
    return (
        <Card className="w-full max-w-sm">
            <CardHeader>
                <CardTitle>Login to your account</CardTitle>
                <CardDescription>
                    Enter your email below to login to your account
                </CardDescription>
                <Button variant="link">Sign Up</Button>
            </CardHeader>
            <CardContent>

                <form onSubmit={handelSubmit}>
                    <div className="flex flex-col gap-6">

                        {
                            error && (
                                <p className="text-sm text-red-500">{error}</p>
                            )
                        }
                        <div className="grid gap-2">
                            <Label htmlFor="email">Email</Label>
                            <Input
                                id="email"
                                type="email"
                                value={email}
                                onChange={(e) => setEmail(e.target.value)}
                            />
                        </div>
                        <div className="grid gap-2">
                            <div className="flex items-center">
                                <Label htmlFor="password">Password</Label>
                                <a
                                    href="#"
                                    className="ml-auto inline-block text-sm underline-offset-4 hover:underline"
                                >
                                    Forgot your password?
                                </a>
                            </div>
                            <Input id="password"
                                type="password"
                                value={password}
                                onChange={(e) => setPassword(e.target.value)}
                            />
                        </div>


                        <Button type="submit" className="w-full" disabled={loading}>
                            {loading ? "Logging in..." : "Login"}
                        </Button>
                    </div>
                </form>
            </CardContent>

        </Card>
    )
}

export default LoginCard
