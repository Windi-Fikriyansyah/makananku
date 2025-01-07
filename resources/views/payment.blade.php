@extends('layouts.app')

@section('content')

<section id="hero" class="hero section">
    <div class="container">
        <h1>Payment Page</h1>

        @if (!empty($cart))
            <ul>
                @foreach ($cart as $item)
                    <li>{{ $item['name'] }} - {{ $item['quantity'] }} x Rp.{{ $item['price'] }}</li>
                @endforeach
            </ul>
            <p>
                Total: Rp.{{ array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)) }}
            </p>

            <!-- Payment Form -->
            <form id="paymentForm">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="table_number">Table Number:</label>
                    <input type="number" id="table_number" name="table_number" required>
                </div>
                <button class="btn-buy" type="button" onclick="handleSubmit()">Proceed to Payment</button>
            </form>
        @else
            <p>Your cart is empty.</p>
        @endif
    </div>
</section>

<!-- Popup Modal -->
<div id="popupModal" class="popup-modal" style="display: none;">
    <div class="popup-content">
        <span class="close-button" onclick="closePopup()">&times;</span>
        <img id="popupImage" src="" alt="Popup Image" style="width: 100%; max-height: 400px;">
        <button class="next-button" onclick="showNextImage()">Next</button>
        <button class="next-button" onclick="sendForm()">Submit Payment</button>
    </div>
</div>

<script>
    let currentImageIndex = 0;
    const images = [
        'assets/img/dummy-qris-safe.png',
        'assets/img/logo.png',
        'assets/img/dummy-qris.png'
    ];

    function openPopup() {
        document.getElementById('popupModal').style.display = 'block';
        showImage(currentImageIndex);
    }

    function closePopup() {
        document.getElementById('popupModal').style.display = 'none';
    }

    function showImage(index) {
        const popupImage = document.getElementById('popupImage');
        popupImage.src = images[index];
    }

    function showNextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        showImage(currentImageIndex);
    }

    function handleSubmit() {
        const form = document.getElementById('paymentForm');
        if (form.checkValidity()) {
            openPopup();
        } else {
            alert('Please fill all required fields.');
        }
    }

    function sendForm() {
        const form = document.getElementById('paymentForm');
        form.method = 'POST';
        form.action = "{{ route('payment.submit') }}";
        form.submit();
    }
</script>

<style>
    .popup-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .popup-content {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .next-button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .next-button:hover {
        background-color: #0056b3;
    }
</style>

@endsection
