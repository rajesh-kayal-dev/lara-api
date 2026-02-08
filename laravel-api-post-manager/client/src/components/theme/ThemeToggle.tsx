import { useEffect, useState } from "react"
import { Button } from "@/components/ui/button"

const ThemeToggle = () => {
  const [dark, setDark] = useState(false)

  // run once on load
  useEffect(() => {
    const savedTheme = localStorage.getItem("theme")
    if (savedTheme === "dark") {
      document.documentElement.classList.add("dark")
      setDark(true)
    }
  }, [])

  const toggleTheme = () => {
    if (dark) {
      document.documentElement.classList.remove("dark")
      localStorage.setItem("theme", "light")
    } else {
      document.documentElement.classList.add("dark")
      localStorage.setItem("theme", "dark")
    }
    setDark(!dark)
  }

  return (
    <Button variant="outline" size="sm" onClick={toggleTheme}>
      {dark ? "☀ Light" : "🌙 Dark"}
    </Button>
  )
}

export default ThemeToggle
