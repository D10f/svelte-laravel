<script>
    import { Link } from "@inertiajs/svelte";
    export let app_name = 'Default';
</script>

<svelte:head>
    <title>{ app_name }</title>
    <meta name="description" content="Your page description" />
</svelte:head>

<h1>Hello, world</h1>

<Link href="/about">About Page</Link>
