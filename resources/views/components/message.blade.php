<div class="container">
    <div x-data="{ showMessage: {{ session('success') ? 'true' : 'false' }} }" x-show="showMessage" class="alert alert-success" role="alert" x-init="setTimeout(() => showMessage = false, 3000)">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
    </div>
</div>
