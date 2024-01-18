<script>
    import { Link } from "@inertiajs/svelte";
    export let app_name = 'Default';
    export let test = '456';
</script>

<svelte:head>
    <title>{ app_name }</title>
    <meta name="description" content="Your page description" />
</svelte:head>

<h1>This is the about page</h1>

<p>{ test }</p>

<Link href="/">Main Page</Link>
