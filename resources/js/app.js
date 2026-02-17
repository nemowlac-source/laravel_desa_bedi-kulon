import "./bootstrap";
import Alpine from "alpinejs";
import Chart from "chart.js/auto";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGIKA NAVIGASI ---
    const hamburger = document.getElementById("hamburger-menu");
    const navMenu = document.getElementById("nav-menu");
    const closeBtn = document.getElementById("close-menu");
    const overlay = document.getElementById("menu-overlay");
    const navLinks = document.querySelectorAll(".nav-links a");

    if (hamburger) {
        const openMenu = () => {
            navMenu.classList.add("mobile-open");
            overlay.classList.add("active");
            document.body.style.overflow = "hidden";
        };

        const closeMenu = () => {
            navMenu.classList.remove("mobile-open");
            overlay.classList.remove("active");
            document.body.style.overflow = "auto";
        };

        hamburger.addEventListener("click", openMenu);
        closeBtn.addEventListener("click", closeMenu);
        overlay.addEventListener("click", closeMenu);
        navLinks.forEach((link) => link.addEventListener("click", closeMenu));
    }
});

// --- LOGIKA CHART (Global Function) ---
window.renderPembiayaanChart = (canvasId, terima, keluar) => {
    const el = document.getElementById(canvasId);
    if (!el) return;

    const finCtx = el.getContext("2d");
    new Chart(finCtx, {
        type: "bar",
        data: {
            labels: ["Penerimaan", "Pengeluaran"],
            datasets: [
                {
                    label: "Anggaran",
                    data: [terima, keluar],
                    backgroundColor: "#438e0d",
                    borderRadius: 4,
                    barThickness: 80,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: (value) =>
                            "Rp" + (value / 1000000).toFixed(0) + " Jt",
                    },
                    grid: { borderDash: [5, 5] },
                },
                x: { grid: { display: false } },
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: (context) =>
                            "Rp" +
                            new Intl.NumberFormat("id-ID").format(context.raw),
                    },
                },
            },
        },
    });
};

// Tambahkan ini di resources/js/app.js kamu

window.renderBansosChart = (canvasId, labels, data) => {
    const el = document.getElementById(canvasId);
    if (!el) return; // Penting: Agar tidak error di halaman tanpa chart

    const ctx = el.getContext("2d");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Jumlah Penerima",
                    data: data,
                    backgroundColor: [
                        "#3b82f6",
                        "#10b981",
                        "#f59e0b",
                        "#ef4444",
                        "#8b5cf6",
                    ],
                    borderRadius: 5,
                    barThickness: 40,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { stepSize: 1 },
                },
                x: {
                    grid: { display: false },
                },
            },
            plugins: {
                legend: { display: false },
            },
        },
    });
};

// Tambahkan ini di resources/js/app.js

window.initHeroSlider = (elementSelector, imageList, intervalTime = 5000) => {
    const heroSection = document.querySelector(elementSelector);

    // Validasi: Jika element hero tidak ditemukan atau gambar kosong, stop
    if (!heroSection || !imageList || imageList.length === 0) return;

    let currentIndex = 0;

    const changeBackground = () => {
        currentIndex++;

        // Looping index
        if (currentIndex >= imageList.length) {
            currentIndex = 0;
        }

        // Ganti background image dengan efek transisi halus jika ada CSS-nya
        heroSection.style.backgroundImage = `url('${imageList[currentIndex]}')`;
    };

    // Jalankan interval
    setInterval(changeBackground, intervalTime);
};
/**
 * Fungsi Global untuk Chart Wajib Pilih
 * Memisahkan logika dari file Blade meningkatkan performa caching browser.
 */
window.renderWajibPilihChart = (canvasId, labels, data) => {
    const el = document.getElementById(canvasId);

    // Validasi agar script tidak error di halaman yang tidak memiliki chart ini
    if (!el) return;

    const wpCtx = el.getContext("2d");

    new Chart(wpCtx, {
        type: "bar",
        data: {
            labels: labels, // Tahun dinamis dari database
            datasets: [
                {
                    label: "Jumlah Wajib Pilih",
                    data: data, // Angka dinamis dari database
                    backgroundColor: "#438e0d", // Hijau tua khas desa
                    borderRadius: 5,
                    barThickness: 80,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 1000,
                    ticks: {
                        stepSize: 200,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            return context.raw + " Jiwa";
                        },
                    },
                },
            },
        },
    });
};
const eduCtx = document.getElementById("pendidikanChart").getContext("2d");

new Chart(eduCtx, {
    type: "bar",
    data: {
        labels: [
            "Tidak/Belum Sekolah",
            "Belum Tamat SD/Sederajat",
            "Tamat SD/Sederajat",
            "SLTP/Sederajat",
            "SLTA/Sederajat",
            "Diploma I/II",
            "Diploma III/Sarjana Muda",
            "Diploma IV/Strata I",
            "Strata II",
            "Strata III",
        ],
        datasets: [
            {
                label: "Jumlah Penduduk",
                data: [181, 93, 180, 78, 132, 5, 11, 46, 0, 0], // Data sesuai gambar
                backgroundColor: "#0d2481", // Biru tua sesuai gambar
                borderRadius: 5,
                barThickness: 40,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                max: 210, // Menyesuaikan skala y sesuai gambar
                ticks: {
                    stepSize: 30,
                },
            },
            x: {
                ticks: {
                    font: {
                        size: 10,
                    },
                },
            },
        },
        plugins: {
            legend: {
                display: false, // Sembunyikan legenda karena sudah jelas dari judul
            },
            tooltip: {
                callbacks: {
                    label: function (context) {
                        return context.raw + " Orang";
                    },
                },
            },
        },
    },
});
window.renderDusunChart = (canvasId, labels, data) => {
    const el = document.getElementById(canvasId);
    if (!el) return;

    const pieCtx = el.getContext("2d");

    new Chart(pieCtx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [
                {
                    data: data,
                    backgroundColor: [
                        "#5b73c7", // Biru untuk Piasan
                        "#90cd76", // Hijau untuk Mubur Kecil
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false, // Menggunakan keterangan custom di samping (sesuai desain desa)
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            // Menghitung total otomatis dari array data
                            const total = context.dataset.data.reduce(
                                (a, b) => a + b,
                                0,
                            );
                            const value = context.raw;
                            const percentage = ((value / total) * 100).toFixed(
                                2,
                            );
                            return `${context.label}: ${value} Jiwa (${percentage}%)`;
                        },
                    },
                },
            },
        },
    });
};
/**
 * Fungsi Global untuk Piramida Penduduk
 */
window.renderPiramidaChart = (canvasId, labels, dataLaki, dataPerempuan) => {
    const el = document.getElementById(canvasId);
    if (!el) return;

    const ctx = el.getContext("2d");

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Laki-Laki",
                    data: dataLaki, // Harus berupa angka negatif untuk efek ke kiri
                    backgroundColor: "#689f84",
                    borderRadius: 5,
                },
                {
                    label: "Perempuan",
                    data: dataPerempuan,
                    backgroundColor: "#f5a691",
                    borderRadius: 5,
                },
            ],
        },
        options: {
            indexAxis: "y",
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    stacked: true,
                    ticks: {
                        // Mengubah angka negatif menjadi positif di sumbu X
                        callback: (value) => Math.abs(value),
                    },
                },
                y: {
                    beginAtZero: true,
                    stacked: true,
                    position: "center",
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: (context) => {
                            let label = context.dataset.label || "";
                            // Mengubah angka negatif menjadi positif di tooltip
                            return `${label}: ${Math.abs(context.raw)} orang`;
                        },
                    },
                },
            },
        },
    });
};
/**
 * Fungsi Global untuk Doughnut Chart Stunting
 * Menggunakan Chart.js untuk memvisualisasikan data kesehatan desa.
 */
window.renderStuntingChart = (canvasId, chartData) => {
    const el = document.getElementById(canvasId);
    if (!el) return;

    const ctx = el.getContext("2d");

    new Chart(ctx, {
        type: "doughnut", // Grafik Donat
        data: {
            labels: ["Normal", "Stunting", "Kurang Gizi"],
            datasets: [
                {
                    data: chartData,
                    backgroundColor: [
                        "#22c55e", // Hijau (Normal)
                        "#ef4444", // Merah (Stunting)
                        "#eab308", // Kuning (Kurang Gizi)
                    ],
                    borderWidth: 0,
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "bottom",
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            const value = context.raw;
                            const total = context.dataset.data.reduce(
                                (a, b) => a + b,
                                0,
                            );
                            const percentage = ((value / total) * 100).toFixed(
                                1,
                            );
                            return `${context.label}: ${value} anak (${percentage}%)`;
                        },
                    },
                },
            },
        },
    });
};
