function generateFibonacci() {
    // Mengambil nilai panjang deret dari input
    const length = document.getElementById('length').value;

    // Inisialisasi deret Fibonacci
    let fibonacciSeries = [0, 1];

    // Menghitung deret Fibonacci hingga mencapai panjang yang diinginkan
    for (let i = 2; i < length; i++) {
    fibonacciSeries[i] = fibonacciSeries[i - 1] + fibonacciSeries[i - 2];
    }

    // Menampilkan hasil di elemen dengan id 'output'
    document.getElementById('output').innerHTML = `<p>Fibonacci Sequence:</p><p>${fibonacciSeries.join(', ')}</p>`;
}