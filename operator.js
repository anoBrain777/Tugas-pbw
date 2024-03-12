function hitung() {
    const angka1 = parseFloat(document.getElementById("angka1").value);
    const angka2 = parseFloat(document.getElementById("angka2").value);
    const operator = document.getElementById("operator").value;

    let hasil;

    const operasi = {
        '+': (a, b) => a + b,
        '-': (a, b) => a - b,
        '*': (a, b) => a * b,
        '/': (a, b) => (b === 0 ? "Error: Pembagian dengan nol!" : a / b),
        '%': (a, b) => a % b
    };

    // Check if operator exists in the operasi object
    if (!operasi.hasOwnProperty(operator)) {
        hasil = "Operator tidak dikenali";
    } else {
        // Spread operator (potential use case explained below)
        // hasil = operasi[operator](angka1, ...[angka2]); // Uncomment for array-based input
        hasil = operasi[operator](angka1, angka2); // Standard usage for two numbers
    }

    document.getElementById("hasil").innerHTML = hasil;
}