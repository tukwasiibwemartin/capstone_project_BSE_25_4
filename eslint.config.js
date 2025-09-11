import pluginVue from 'eslint-plugin-vue'

export default [
    // For JavaScript files
    {
        files: ['**/*.js'],
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
    },
    // For Vue files
    ...pluginVue.configs['flat/essential'],
    {
        files: ['**/*.vue'],
        languageOptions: {
            globals: {
                window: "readonly",
                document: "readonly",
                console: "readonly"
            }
        },
        rules: {
            "no-console": "warn",
            "no-unused-vars": "error",
            "vue/multi-word-component-names": "off"
        }
    }
];