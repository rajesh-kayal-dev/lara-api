import { API_BASE_URL } from "../config/api"

export const loginRequest = async (data) => {
    const response = await fetch(`${API_BASE_URL}/auth/login`,{
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
    })

    const result = await response.json()

    if (!response.ok) {
        throw new Error(result.message || "Login faild")
    }

    return result;
}