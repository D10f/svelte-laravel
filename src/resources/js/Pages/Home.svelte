<script>
    import { Link } from "@inertiajs/svelte";
    export let app_name = 'Default';
    export let create_post_url = '';
</script>

<svelte:head>
    <title>{ app_name }</title>
    <meta name="description" content="Your page description" />
</svelte:head>

<h1>Hello, world</h1>

<Link href={ create_post_url }>Create a new post</Link>
<Link href="/about">About Page</Link>
