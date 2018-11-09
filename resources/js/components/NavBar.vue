<template>
    <div>
        <header class="nav">

            <h1><a href=""><img :src="logo" alt=""></a></h1>
            <ul>
                <li><a href="#">Wanderrouten</a></li>
                <li><a href="#">Alternativ Aktivitäten</a></li>
                <li><a href="#">Hütte</a></li>
                <li><a href="#">Bergführer</a></li>

            </ul>
        </header>

    </div>
</template>
<script>

    export default {
        name:"navbar-component",
        props: ['logo'],
        mounted(){

        }


    }
</script>