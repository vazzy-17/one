{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binance Price AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Get Cryptocurrency Price</h1>
    <button id="fetch-price">Get BTC Price</button>

    <h2>Result:</h2>
    <p>Symbol: <span id="crypto-symbol">-</span></p>
    <p>Price: <span id="crypto-price">-</span></p>

    <script>
        $(document).ready(function () {
            // Event listener for button click
            $('#fetch-price').click(function () {
                // Make AJAX request
                $.ajax({
                    url: 'http://127.0.0.1:8000/api/binance/price/BTCUSDT', // URL API
                    type: 'GET',
                    success: function (response) {
                        if (response.status === 'success') {
                            // Update the DOM with API response
                            $('#crypto-symbol').text(response.data.symbol);
                            $('#crypto-price').text(response.data.price);
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('Failed to fetch data from API.');
                    }
                });
            });
        });
    </script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinGecko Price</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Get Cryptocurrency Price</h1>

    <!-- Input untuk memasukkan simbol koin (misalnya: bitcoin, ethereum, dogecoin) -->
    <label for="coinSymbol">Enter Coin Symbol (e.g., bitcoin): </label>
    <input type="text" id="coinSymbol" name="coinSymbol" placeholder="e.g., bitcoin">
    <button id="getPriceBtn">Get Price</button>

    <div id="priceResult"></div>

    <script>
        $(document).ready(function () {
            // Event listener untuk tombol Get Price
            $('#getPriceBtn').click(function () {
                // Ambil simbol koin dari input
                var coinSymbol = $('#coinSymbol').val().trim().toLowerCase();

                // Validasi input agar tidak kosong
                if (!coinSymbol) {
                    alert('Please enter a valid coin symbol');
                    return;
                }

                // Lakukan AJAX request ke API Laravel
                $.ajax({
                    url: 'api/coingecko/price/' + coinSymbol, // URL API yang dibuat di Laravel
                    type: 'GET',
                    success: function (response) {
                        // Tampilkan hasil harga jika request sukses
                        if (response.status === 'success') {
                            var price = response.data[coinSymbol].usd;
                            $('#priceResult').html(
                                '<h2>The current price of ' + coinSymbol.toUpperCase() + ' is $' + price + '</h2>'
                            );
                        } else {
                            $('#priceResult').html('<p>Failed to fetch price. Please try again.</p>');
                        }
                    },
                    error: function () {
                        // Menangani jika ada error dalam request
                        $('#priceResult').html('<p>Error fetching data. Please check your connection or try again later.</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>

