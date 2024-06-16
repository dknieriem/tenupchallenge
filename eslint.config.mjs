import globals from "globals";
import js from "@eslint/js";


export default [
  {files: ["assets/js/*.js"], languageOptions: {sourceType: "commonjs"}},
  {
    languageOptions: { globals: globals.browser },
    rules : { "no-unused-vars": "warn", "no-undef": "warn"}
  },
  js.configs.recommended,
];