<script lang="ts">
    import { Link } from "@inertiajs/svelte";

    export let app_name = 'Default';
    export let home_page = '';
    export let posts = [];

</script>

<svelte:head>
    <title>{ app_name }</title>
    <meta name="description" content="Your page description" />
</svelte:head>

<h1>This is the main posts page</h1>

<Link href={home_page}>Main Page</Link>

<ul>
    {#each posts as post}
        <li>
            <h3>{ post.title }</h3>
            <p>{ post.content }</p>
        </li>
    {/each}
</ul>
