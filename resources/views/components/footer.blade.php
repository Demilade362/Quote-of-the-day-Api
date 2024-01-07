<div class="mt-5" style="margin-top: 10rem;">
    <footer class="text-center text-lg-start">
        <div class="container d-flex justify-content-center py-5">
            <button type="button" class="btn btn-primary btn-lg btn-floating mx-2">
                <i class="bi bi-facebook"></i>
            </button>
            <button type="button" class="btn btn-danger btn-lg btn-floating mx-2">
                <i class="bi bi-youtube"></i>
            </button>
            <button type="button" class="btn bg-danger-subtle btn-lg btn-floating mx-2">
                <i class="bi bi-instagram"></i>
            </button>
            <button type="button" class="btn btn-dark btn-lg btn-floating mx-2">
                <i class="bi bi-twitter-x"></i>
            </button>
        </div>

        <!-- Copyright -->
        <div class="text-center text-light bg-dark p-3">
            &copy; 2023 Copyright: Quote of the Day Api
        </div>
        <!-- Copyright -->
    </footer>
</div>

<script>
    fetch('http://127.0.0.1:8000/api/quote')
        .then(response => response.json())
        .then(data => {
            const jsonDataCard = document.getElementById('jsonDataCard');
            const jsonDataContent = document.getElementById('jsonDataContent');
            jsonDataContent.textContent = JSON.stringify(data, null, 2);
        })
        .catch(error => console.error('Error fetching data:', error));
    document.getElementById('fetchButton').addEventListener('click', function() {
        fetch('http://127.0.0.1:8000/api/quote')
            .then(response => response.json())
            .then(data => {
                const jsonDataCard = document.getElementById('jsonDataCard');
                const jsonDataContent = document.getElementById('jsonDataContent');
                jsonDataContent.textContent = JSON.stringify(data, null, 2);
            })
            .catch(error => console.error('Error fetching data:', error));
    });
</script>
