import "./bootstrap";
import "../css/app.css";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.store("theme", {
    currentTheme: "",
    isDarkMode: null,
    init() {
        const html = window.document.documentElement;
        this.currentTheme = localStorage.getItem("theme") || "system";
        localStorage.setItem("theme", this.currentTheme);
        this.isDarkMode = window.matchMedia("(prefers-color-scheme: dark)");
        this.updateTheme(this.currentTheme);
        this.isDarkMode.addEventListener("change", ({ matches }) => {
            if (this.currentTheme === "system") {
                matches
                    ? html.classList.add("dark")
                    : html.classList.remove("dark");
            }
        });
    },
    updateTheme(theme) {
        const html = window.document.documentElement;

        if (
            theme === "dark" ||
            (theme === "system" && this.isDarkMode.matches)
        ) {
            html.classList.add("dark");
        } else if (
            theme === "light" ||
            (theme === "system" && !this.isDarkMode.matches)
        ) {
            html.classList.remove("dark");
        }

        this.currentTheme = theme;
        localStorage.setItem("theme", theme);
    },
});

Alpine.start();
