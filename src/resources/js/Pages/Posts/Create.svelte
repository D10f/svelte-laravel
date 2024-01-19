<script lang="ts">
    import { Link, useForm } from "@inertiajs/svelte";
    import { createLabel, melt } from '@melt-ui/svelte'

    export let app_name = 'Default';
    export let home_page = '';
    export let store_post_url = '';

    const { elements: { root } } = createLabel();

    const form = useForm({
        title: '',
        content: ''
    });

    function handleSubmit() {
        $form.post(store_post_url);
    }
</script>

<svelte:head>
    <title>{ app_name }</title>
    <meta name="description" content="Your page description" />
</svelte:head>

<Link href={ home_page }>Back To Main</Link>

<form on:submit|preventDefault={handleSubmit}>
    <div class="form-field">
        <label for="title" use:melt={$root}>Title</label>
        <input type="text" id="title" bind:value={$form.title} />
    </div>

    <div class="form-field">
        <label for="content" use:melt={$root}>Content</label>
        <textarea name="content" id="content" cols="30" rows="10" bind:value={$form.content} />
    </div>

    <div class="form-field">
        <button type="submit">Create Post</button>
    </div>
</form>

<style scoped>
    form {
        max-width: 50vw;
    }

    .form-field:not(:last-child) {
        margin-bottom: 1em;
    }

    .form-field:first-child {
        margin-top: 1em;
    }

    label,
    textarea,
    input {
        display: block;
        width: 100%;
    }

    textarea,
    input {
        border: solid 1px black;
        border-radius: 5px;
        padding: 0.5em;
        font-size: 1rem;
    }

    button {
        background-color: #ff3e00;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 0.5em;
        font-size: 1em;
        box-shadow: 5px 5px 5px rgba(0,0,0,0.25);
        cursor: pointer;

        &:hover:not([disabled]) {
            background-color: blue;
        }

        &[disabled] {
            background-color: gray;
            color: black;
            cursor: not-allowed;
        }
    }
</style>

