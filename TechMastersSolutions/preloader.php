
<div id="preloader">
    <div class="spinner"></div>
</div>

<style>
    #preloader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .spinner {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #0ff;
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 10s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<script>
    window.addEventListener('load', function () {
        document.getElementById('preloader').style.display = 'none';
    });
</script>
