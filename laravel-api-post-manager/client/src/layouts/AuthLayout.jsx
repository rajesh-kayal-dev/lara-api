import ThemeToggle from "@/components/theme/ThemeToggle"

const AuthLayout = ({ children }) => {
  return (
    <div className="min-h-screen flex items-center justify-center bg-background text-foreground">
      
      {/* Theme button top-right */}
      <div className="absolute top-4 right-4">
        <ThemeToggle />
      </div>

      {/* Card container */}
      <div className="w-full max-w-md">
        {children}
      </div>
    </div>
  )
}

export default AuthLayout
