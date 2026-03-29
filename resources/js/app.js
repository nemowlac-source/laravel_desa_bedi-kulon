import "./bootstrap";
import Alpine from "alpinejs";
import Swal from "sweetalert2";
import Chart from "chart.js/auto";
import ChartDataLabels from "chartjs-plugin-datalabels";
import Quill from "quill";
window.Quill = Quill;
window.Alpine = Alpine;
Alpine.start();
window.Swal = Swal;

// DAFTARKAN KEDUANYA KE WINDOW
window.Chart = Chart;
window.ChartDataLabels = ChartDataLabels;

// Registrasi plugin secara internal di bundle Vite
Chart.register(ChartDataLabels);

document.addEventListener("DOMContentLoaded", function () {
    const btn = document.getElementById("readMoreBtn");
    const list = document.getElementById("missionList");
    const btnText = btn.querySelector(".btn-text");

    btn.addEventListener("click", function () {
        // Toggle class expanded pada list
        list.classList.toggle("expanded");

        // Toggle class active pada tombol untuk putar icon 🛠️
        btn.classList.toggle("active");

        // Ubah teks secara dinamis
        if (list.classList.contains("expanded")) {
            btnText.textContent = "Tutup";
        } else {
            btnText.textContent = "Baca Selengkapnya";
        }
    });
});

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
    if (!heroSection || !imageList || imageList.length === 0) return;

    let currentIndex = 0;

    // Fungsi untuk mengganti background
    const setBackground = (index) => {
        heroSection.style.backgroundImage = `url('${imageList[index]}')`;
    };

    // LANGKAH PENTING: Panggil langsung agar gambar pertama muncul INSTAN
    setBackground(currentIndex);

    const changeBackground = () => {
        currentIndex++;
        if (currentIndex >= imageList.length) {
            currentIndex = 0;
        }
        setBackground(currentIndex);
    };

    // Jalankan interval untuk gambar selanjutnya
    setInterval(changeBackground, intervalTime);
};
/**
 * Fungsi Global untuk Chart Wajib Pilih
 * Memisahkan logika dari file Blade meningkatkan performa caching browser.
 */
document.addEventListener("DOMContentLoaded", function () {
    const ids = ["wajibPilihDesktop", "wajibPilihMobile"];

    ids.forEach((id) => {
        const canvas = document.getElementById(id);
        if (!canvas) return;

        // Ambil data yang dikirim dari Blade tadi
        const labelsWp = JSON.parse(canvas.getAttribute("data-labels") || "[]");
        const dataWp = JSON.parse(canvas.getAttribute("data-values") || "[]");

        if (labelsWp.length > 0) {
            new Chart(canvas.getContext("2d"), {
                type: "bar",
                data: {
                    labels: labelsWp,
                    datasets: [
                        {
                            label: "Wajib Pilih",
                            data: dataWp,
                            backgroundColor: "#2ac0b4",
                            borderRadius: 2,
                            barPercentage: 0.5,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { display: false },
                        datalabels: {
                            display: true,
                            anchor: "end",
                            align: "top",
                            color: "#1f2937",
                            font: { weight: "bold" },
                        },
                    },
                    scales: {
                        y: { beginAtZero: true },
                        x: { grid: { display: false } },
                    },
                },
            });
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // 1. Ambil kedua elemen Canvas (Desktop & Mobile)
    const ctxDesktop = document.getElementById("pendidikanChartDesktop");
    const ctxMobile = document.getElementById("pendidikanChartMobile");

    // Jika keduanya tidak ada, hentikan script agar tidak error
    if (!ctxDesktop && !ctxMobile) return;

    // 2. Data Master (Hanya ditulis satu kali)
    const dataLabels = [
        "Tidak/Belum Sekolah",
        "Belum Tamat SD",
        "Tamat SD/Sederajat",
        "SLTP/Sederajat",
        "SLTA/Sederajat",
        "Diploma I/II",
        "Diploma III/Sarjana",
        "Diploma IV/Strata I",
        "Strata II",
        "Strata III",
    ];
    const dataValues = [178, 202, 289, 140, 289, 21, 14, 26, 2, 0];

    // 3. Fungsi Pembuat Grafik (Agar bisa dipanggil berulang)
    function buatGrafikPendidikan(elemenCanvas, isMobile = false) {
        if (!elemenCanvas) return;

        // Trik: Jika di layar HP (Mobile), teks sumbu X miring saja agar tidak nabrak
        // Jika di layar Desktop, teks lurus dan pakai multi-line
        const rotasiTeks = isMobile ? 45 : 0;

        new Chart(elemenCanvas.getContext("2d"), {
            type: "bar",
            data: {
                labels: dataLabels,
                datasets: [
                    {
                        label: "Jumlah Penduduk",
                        data: dataValues,
                        backgroundColor: "#2ac0b4",
                        borderRadius: 2,
                        barPercentage: 0.7,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: { top: 20 },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 320,
                        grid: {
                            color: "#e5e7eb",
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 50,
                            color: "#6b7280",
                            font: { size: 11 },
                        },
                    },
                    x: {
                        grid: { display: false },
                        ticks: {
                            color: "#4b5563",
                            font: { size: 10 },
                            maxRotation: rotasiTeks,
                            minRotation: rotasiTeks,
                            autoSkip: false,
                            callback: function (value) {
                                let label = this.getLabelForValue(value);

                                // Jangan pakai pemisah dua baris kalau sedang di HP
                                // karena di HP layarnya sempit, mending dimiringkan saja.
                                if (
                                    !isMobile &&
                                    label.length > 12 &&
                                    label.includes(" ")
                                ) {
                                    let kata = label.split(" ");
                                    let tengah = Math.ceil(kata.length / 2);
                                    let barisAtas = kata
                                        .slice(0, tengah)
                                        .join(" ");
                                    let barisBawah = kata
                                        .slice(tengah)
                                        .join(" ");
                                    return [barisAtas, barisBawah];
                                }
                                return label;
                            },
                        },
                    },
                },
                plugins: {
                    legend: { display: false },
                    datalabels: {
                        color: "#1f2937",
                        anchor: "end",
                        align: "top",
                        offset: 4,
                        font: { size: 11, weight: "bold" },
                        formatter: function (value) {
                            return value === 0 ? "" : value;
                        },
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
    }

    // 4. Eksekusi! Gambar grafiknya di Desktop dan Mobile
    buatGrafikPendidikan(ctxDesktop, false); // false = desktop
    buatGrafikPendidikan(ctxMobile, true); // true = mobile
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
}; /**
 * Fungsi Global untuk Piramida Penduduk
 * Menggabungkan logika pemrosesan data negatif dan kustomisasi tampilan
 */
window.renderPiramidaChart = (canvasId, labels, dataLaki, dataPerempuan) => {
    const el = document.getElementById(canvasId);
    if (!el) return;

    const ctx = el.getContext("2d");

    // Otomatis ubah data laki-laki menjadi negatif untuk efek cermin ke kiri
    const dataLakiNegatif = dataLaki.map((value) => -Math.abs(value));

    new Chart(ctx, {
        type: "bar",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "Laki-Laki",
                    data: dataLakiNegatif,
                    backgroundColor: "#3b82f6", // Biru sesuai script baru Anda
                    borderRadius: 5,
                },
                {
                    label: "Perempuan",
                    data: dataPerempuan,
                    backgroundColor: "#ec4899", // Pink sesuai script baru Anda
                    borderRadius: 5,
                },
            ],
        },
        options: {
            indexAxis: "y", // Membuat chart horizontal
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    stacked: true,
                    ticks: {
                        // Menghilangkan tanda minus di label sumbu X
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
                            if (label) {
                                label += ": ";
                            }
                            // Menghilangkan tanda minus di tooltip
                            return label + Math.abs(context.raw) + " orang";
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

document.addEventListener("DOMContentLoaded", function () {
    // --- Skrip Slider UMKM ---
    const sliderUmkm = document.getElementById("sliderUmkm");
    const btnPrevUmkm = document.getElementById("btnPrevUmkm");
    const btnNextUmkm = document.getElementById("btnNextUmkm");

    if (sliderUmkm && btnPrevUmkm && btnNextUmkm) {
        btnPrevUmkm.addEventListener("click", () => {
            const cardWidth =
                sliderUmkm.querySelector(".snap-start").offsetWidth;
            sliderUmkm.scrollBy({
                left: -(cardWidth + 16),
                behavior: "smooth",
            });
        });

        btnNextUmkm.addEventListener("click", () => {
            const cardWidth =
                sliderUmkm.querySelector(".snap-start").offsetWidth;
            sliderUmkm.scrollBy({
                left: cardWidth + 16,
                behavior: "smooth",
            });
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    // --- Skrip Slider Potensi ---
    const sliderPotensi = document.getElementById("sliderPotensi");
    const btnPrevPotensi = document.getElementById("btnPrevPotensi");
    const btnNextPotensi = document.getElementById("btnNextPotensi");

    if (sliderPotensi && btnPrevPotensi && btnNextPotensi) {
        btnPrevPotensi.addEventListener("click", () => {
            const cardWidth =
                sliderPotensi.querySelector(".snap-start").offsetWidth;
            sliderPotensi.scrollBy({
                left: -(cardWidth + 16),
                behavior: "smooth",
            });
        });

        btnNextPotensi.addEventListener("click", () => {
            const cardWidth =
                sliderPotensi.querySelector(".snap-start").offsetWidth;
            sliderPotensi.scrollBy({
                left: cardWidth + 16,
                behavior: "smooth",
            });
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const sliderSotk = document.getElementById("sliderSotk");
    const btnPrev = document.getElementById("btnPrevSotk");
    const btnNext = document.getElementById("btnNextSotk");

    if (sliderSotk && btnPrev && btnNext) {
        // Lebar satu kad (160px) + gap (16px) = kira-kira 176px
        const scrollAmount = 176;

        btnPrev.addEventListener("click", () => {
            sliderSotk.scrollBy({
                left: -scrollAmount,
                behavior: "smooth",
            });
        });

        btnNext.addEventListener("click", () => {
            sliderSotk.scrollBy({
                left: scrollAmount,
                behavior: "smooth",
            });
        });
    }
});
document.addEventListener("DOMContentLoaded", function () {
    // --- Skrip Slider Berita ---
    const sliderBerita = document.getElementById("sliderBerita");
    const btnPrevBerita = document.getElementById("btnPrevBerita");
    const btnNextBerita = document.getElementById("btnNextBerita");

    if (sliderBerita && btnPrevBerita && btnNextBerita) {
        btnPrevBerita.addEventListener("click", () => {
            // Mengambil lebar satu kartu secara dinamis untuk jarak geser
            const cardWidth =
                sliderBerita.querySelector(".snap-start").offsetWidth;
            sliderBerita.scrollBy({
                left: -(cardWidth + 16),
                behavior: "smooth",
            }); // 16 adalah gap
        });

        btnNextBerita.addEventListener("click", () => {
            const cardWidth =
                sliderBerita.querySelector(".snap-start").offsetWidth;
            sliderBerita.scrollBy({
                left: cardWidth + 16,
                behavior: "smooth",
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Daftar gambar yang akan bergantian (Gunakan variabel ini)
    const myImages = [
        "{{ asset('assets/img/background 1.webp') }}",
        "{{ asset('assets/img/background 2.webp') }}",
        "{{ asset('assets/img/background 3.webp') }}",
    ];

    // Preload agar perpindahan gambar tidak patah-patah
    myImages.forEach((src) => {
        const img = new Image();
        img.src = src;
    });

    // Jalankan Slider untuk Desktop (Target class .hero)
    if (typeof window.initHeroSlider === "function") {
        window.initHeroSlider(".hero", myImages, 5000); // Ganti gambar tiap 5 detik
    }

    // Opsional: Slider sederhana untuk Mobile
    let mobileIdx = 0;
    const mobileImgElement = document.getElementById("mobileHeroImg");
    if (mobileImgElement) {
        setInterval(() => {
            mobileIdx = (mobileIdx + 1) % myImages.length;
            mobileImgElement.style.opacity = 0; // Efek fade out
            setTimeout(() => {
                mobileImgElement.src = myImages[mobileIdx];
                mobileImgElement.style.opacity = 1; // Efek fade in
            }, 500);
        }, 5000);
    }
});

let desktopSlideIndex = 1;
let mobileSlideIndex = 1;

// Fungsi navigasi (bisa dipanggil dari tombol)
function plusSlides(n, isMobile = false) {
    if (isMobile) {
        showMobileSlides((mobileSlideIndex += n));
    } else {
        showDesktopSlides((desktopSlideIndex += n));
    }
}

// Slider Khusus Desktop (Mengganti Background .hero)
function showDesktopSlides(n) {
    let slides = document.querySelectorAll(".myslides-desktop");
    if (slides.length === 0) return;

    if (n > slides.length) {
        desktopSlideIndex = 1;
    }
    if (n < 1) {
        desktopSlideIndex = slides.length;
    }

    slides.forEach((s) => s.classList.add("hidden")); // Sembunyikan semua
    slides[desktopSlideIndex - 1].classList.remove("hidden"); // Munculkan yang aktif
}

// Slider Khusus Mobile (Gaya Card)
function showMobileSlides(n) {
    let slides = document.querySelectorAll(".myslides-mobile");
    if (slides.length === 0) return;

    if (n > slides.length) {
        mobileSlideIndex = 1;
    }
    if (n < 1) {
        mobileSlideIndex = slides.length;
    }

    slides.forEach((s) => s.classList.add("hidden"));
    slides[mobileSlideIndex - 1].classList.remove("hidden");
}
