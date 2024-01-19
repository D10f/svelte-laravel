import { vitePreprocess } from "@sveltejs/vite-plugin-svelte";
import { preprocessMeltUI, sequence } from "@melt-ui/pp";

const config = {
    preprocess: sequence([preprocessMeltUI(), vitePreprocess()]),
};

export default config;
