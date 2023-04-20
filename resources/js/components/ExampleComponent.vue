<template>
    <div>
        <button @click="updateInfo">
            <i class="fa-solid fa-thumbtack"></i>
        </button>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        methods: {
            updateInfo() {
                axios.post('/api/keep', {
                    // パラメータを指定する
                })
                .then(response => {
                    // 成功時の処理
                })
                .catch(error => {
                    // 失敗時の処理
                });
            }
        }
    }
</script>
