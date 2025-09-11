export default [
    {
        languageOptions: {
            globals: {
                window: "readonly",
                document: "readonly",
                console: "readonly"
            },
            ecmaVersion: 2022,
            sourceType: "module"
        },
        rules: {
            "no-console": "warn",
            "no-unused-vars": "error",
            "semi": ["error", "always"]
        }
    }
];