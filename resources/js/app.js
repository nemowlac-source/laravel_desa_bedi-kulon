// Pengecekan aman apakah Chart.js sudah dimuat sebelum didaftarkan ke window
if (typeof Chart !== "undefined") {
    window.Chart = Chart;
    if (typeof ChartDataLabels !== "undefined") {
        window.ChartDataLabels = ChartDataLabels;
        Chart.register(ChartDataLabels);
    } else {
        console.warn("Plugin ChartDataLabels belum dimuat.");
    }
} else {
    console.error(
        "Library Chart.js belum dimuat! Pastikan script Chart.js di-load sebelum file ini.",
    );
}

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGIKA BACA SELENGKAPNYA ---
    const btn = document.getElementById("readMoreBtn");
    const list = document.getElementById("missionList");

    // Error handling: Pastikan elemen btn dan list ada di halaman
    if (btn && list) {
        const btnText = btn.querySelector(".btn-text");

        btn.addEventListener("click", function () {
            list.classList.toggle("expanded");
            btn.classList.toggle("active");

            if (btnText) {
                if (list.classList.contains("expanded")) {
                    btnText.textContent = "Tutup";
                } else {
                    btnText.textContent = "Baca Selengkapnya";
                }
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGIKA NAVIGASI ---
    const hamburger = document.getElementById("hamburger-menu");
    const navMenu = document.getElementById("nav-menu");
    const closeBtn = document.getElementById("close-menu");
    const overlay = document.getElementById("menu-overlay");
    const navLinks = document.querySelectorAll(".nav-links a");

    if (hamburger && navMenu && overlay && closeBtn) {
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
    try {
        const el = document.getElementById(canvasId);
        if (!el || typeof Chart === "undefined") return;

        const finCtx = el.getContext("2d");
        new Chart(finCtx, {
            type: "bar",
            data: {
                labels: ["Penerimaan", "Pengeluaran"],
                datasets: [
                    {
                        label: "Anggaran",
                        data: [terima || 0, keluar || 0], // Fallback jika data undefined
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
                                new Intl.NumberFormat("id-ID").format(
                                    context.raw,
                                ),
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error("Gagal merender grafik Pembiayaan:", error);
    }
};

window.renderBansosChart = (canvasId, labels, data) => {
    try {
        const el = document.getElementById(canvasId);
        if (!el || typeof Chart === "undefined") return;

        const ctx = el.getContext("2d");
        new Chart(ctx, {
            type: "bar",
            data: {
                labels: labels || [],
                datasets: [
                    {
                        label: "Jumlah Penerima",
                        data: data || [],
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
                    y: { beginAtZero: true, ticks: { stepSize: 1 } },
                    x: { grid: { display: false } },
                },
                plugins: { legend: { display: false } },
            },
        });
    } catch (error) {
        console.error("Gagal merender grafik Bansos:", error);
    }
};

window.initHeroSlider = (elementSelector, imageList, intervalTime = 5000) => {
    try {
        const heroSection = document.querySelector(elementSelector);
        if (!heroSection || !Array.isArray(imageList) || imageList.length === 0)
            return;

        let currentIndex = 0;
        const setBackground = (index) => {
            heroSection.style.backgroundImage = `url('${imageList[index]}')`;
        };

        setBackground(currentIndex);

        setInterval(() => {
            currentIndex = (currentIndex + 1) % imageList.length;
            setBackground(currentIndex);
        }, intervalTime);
    } catch (error) {
        console.error("Error pada Hero Slider:", error);
    }
};

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGIKA WAJIB PILIH ---
    const ids = ["wajibPilihDesktop", "wajibPilihMobile"];

    ids.forEach((id) => {
        const canvas = document.getElementById(id);
        if (!canvas || typeof Chart === "undefined") return;

        try {
            // Gunakan default '[]' jika atribut kosong, lalu try JSON.parse
            const rawLabels = canvas.getAttribute("data-labels") || "[]";
            const rawValues = canvas.getAttribute("data-values") || "[]";

            const labelsWp = JSON.parse(rawLabels);
            const dataWp = JSON.parse(rawValues);

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
        } catch (error) {
            console.error(
                `Gagal parsing data atau render chart Wajib Pilih di ID ${id}:`,
                error,
            );
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // --- LOGIKA PENDIDIKAN ---
    const ctxDesktop = document.getElementById("pendidikanChartDesktop");
    const ctxMobile = document.getElementById("pendidikanChartMobile");

    if ((!ctxDesktop && !ctxMobile) || typeof Chart === "undefined") return;

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

    // FIX: Anda menggunakan dataValues di skrip asli, tapi belum di-define.
    // Pastikan ini mengambil data yang benar, misal dari global window atau default array 0.
    const dataValues =
        typeof window.pendidikanDataValues !== "undefined"
            ? window.pendidikanDataValues
            : Array(10).fill(0);

    function buatGrafikPendidikan(elemenCanvas, isMobile = false) {
        if (!elemenCanvas) return;

        const rotasiTeks = isMobile ? 45 : 0;

        try {
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
                    layout: { padding: { top: 20 } },
                    scales: {
                        y: {
                            beginAtZero: true,
                            max:
                                Math.max(...dataValues) > 320 ? undefined : 320, // Auto scale jika data > 320
                            grid: { color: "#e5e7eb", drawBorder: false },
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
                                    if (
                                        !isMobile &&
                                        label.length > 12 &&
                                        label.includes(" ")
                                    ) {
                                        let kata = label.split(" ");
                                        let tengah = Math.ceil(kata.length / 2);
                                        return [
                                            kata.slice(0, tengah).join(" "),
                                            kata.slice(tengah).join(" "),
                                        ];
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
                            formatter: (value) => (value === 0 ? "" : value),
                        },
                        tooltip: {
                            callbacks: {
                                label: (context) => context.raw + " Orang",
                            },
                        },
                    },
                },
            });
        } catch (error) {
            console.error("Gagal merender grafik Pendidikan:", error);
        }
    }

    buatGrafikPendidikan(ctxDesktop, false);
    buatGrafikPendidikan(ctxMobile, true);
});

window.renderDusunChart = (canvasId, labels, data) => {
    try {
        const el = document.getElementById(canvasId);
        if (!el || typeof Chart === "undefined") return;

        new Chart(el.getContext("2d"), {
            type: "pie",
            data: {
                labels: labels || [],
                datasets: [
                    {
                        data: data || [],
                        backgroundColor: ["#5b73c7", "#90cd76"],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const total = context.dataset.data.reduce(
                                    (a, b) => a + (Number(b) || 0),
                                    0,
                                );
                                const value = Number(context.raw) || 0;
                                const percentage =
                                    total > 0
                                        ? ((value / total) * 100).toFixed(2)
                                        : 0;
                                return `${context.label}: ${value} Jiwa (${percentage}%)`;
                            },
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error("Gagal merender Dusun Chart:", error);
    }
};

window.renderPiramidaChart = (canvasId, labels, dataLaki, dataPerempuan) => {
    try {
        const el = document.getElementById(canvasId);
        if (!el || typeof Chart === "undefined") return;

        const dataLakiNegatif = Array.isArray(dataLaki)
            ? dataLaki.map((val) => -Math.abs(val || 0))
            : [];
        const safeDataPerempuan = Array.isArray(dataPerempuan)
            ? dataPerempuan.map((val) => Number(val) || 0)
            : [];

        new Chart(el.getContext("2d"), {
            type: "bar",
            data: {
                labels: labels || [],
                datasets: [
                    {
                        label: "Laki-Laki",
                        data: dataLakiNegatif,
                        backgroundColor: "#3b82f6",
                        borderRadius: 5,
                    },
                    {
                        label: "Perempuan",
                        data: safeDataPerempuan,
                        backgroundColor: "#ec4899",
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
                        ticks: { callback: (value) => Math.abs(value) },
                    },
                    y: { beginAtZero: true, stacked: true, position: "center" },
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: (context) =>
                                (context.dataset.label
                                    ? context.dataset.label + ": "
                                    : "") +
                                Math.abs(context.raw) +
                                " orang",
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error("Gagal merender Piramida Chart:", error);
    }
};

window.renderStuntingChart = (canvasId, chartData) => {
    try {
        const el = document.getElementById(canvasId);
        if (!el || typeof Chart === "undefined") return;

        new Chart(el.getContext("2d"), {
            type: "doughnut",
            data: {
                labels: ["Normal", "Stunting", "Kurang Gizi"],
                datasets: [
                    {
                        data: chartData || [],
                        backgroundColor: ["#22c55e", "#ef4444", "#eab308"],
                        borderWidth: 0,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: "bottom" },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const total = context.dataset.data.reduce(
                                    (a, b) => a + (Number(b) || 0),
                                    0,
                                );
                                const value = Number(context.raw) || 0;
                                const percentage =
                                    total > 0
                                        ? ((value / total) * 100).toFixed(1)
                                        : 0;
                                return `${context.label}: ${value} anak (${percentage}%)`;
                            },
                        },
                    },
                },
            },
        });
    } catch (error) {
        console.error("Gagal merender Stunting Chart:", error);
    }
};

// --- Helper Fungsi Scroll Slider agar tidak Reusable & Aman ---
function initHorizontalScroll(sliderId, prevBtnId, nextBtnId) {
    const slider = document.getElementById(sliderId);
    const btnPrev = document.getElementById(prevBtnId);
    const btnNext = document.getElementById(nextBtnId);

    if (slider && btnPrev && btnNext) {
        const scrollSlide = (direction) => {
            const card = slider.querySelector(".snap-start");
            // Hitung lebar kartu, jika tidak ada fallback ke 250px
            const cardWidth = card ? card.offsetWidth : 250;
            slider.scrollBy({
                left: direction * (cardWidth + 16),
                behavior: "smooth",
            });
        };

        btnPrev.addEventListener("click", () => scrollSlide(-1));
        btnNext.addEventListener("click", () => scrollSlide(1));
    }
}

document.addEventListener("DOMContentLoaded", function () {
    initHorizontalScroll("sliderUmkm", "btnPrevUmkm", "btnNextUmkm");
    initHorizontalScroll("sliderPotensi", "btnPrevPotensi", "btnNextPotensi");
    initHorizontalScroll("sliderBerita", "btnPrevBerita", "btnNextBerita");

    // SOTK beda karena scrollAmount-nya statis di kodenya, saya sesuaikan:
    const sliderSotk = document.getElementById("sliderSotk");
    const btnPrevSotk = document.getElementById("btnPrevSotk");
    const btnNextSotk = document.getElementById("btnNextSotk");
    if (sliderSotk && btnPrevSotk && btnNextSotk) {
        btnPrevSotk.addEventListener("click", () =>
            sliderSotk.scrollBy({ left: -176, behavior: "smooth" }),
        );
        btnNextSotk.addEventListener("click", () =>
            sliderSotk.scrollBy({ left: 176, behavior: "smooth" }),
        );
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Pastikan syntax asset() ini digunakan di dalam file Blade (.blade.php),
    // jika di file .js terpisah ini tidak akan terbaca oleh Laravel.
    const myImages = [
        "{{ asset('assets/img/background 1.webp') }}",
        "{{ asset('assets/img/background 2.webp') }}",
        "{{ asset('assets/img/background 3.webp') }}",
    ];

    myImages.forEach((src) => {
        const img = new Image();
        img.src = src;
    });

    if (typeof window.initHeroSlider === "function") {
        window.initHeroSlider(".hero", myImages, 5000);
    }

    let mobileIdx = 0;
    const mobileImgElement = document.getElementById("mobileHeroImg");
    if (mobileImgElement && myImages.length > 0) {
        setInterval(() => {
            mobileIdx = (mobileIdx + 1) % myImages.length;
            mobileImgElement.style.opacity = 0;
            setTimeout(() => {
                // Tambahkan validasi agar tidak error jika elemen tiba-tiba hilang di DOM
                if (document.getElementById("mobileHeroImg")) {
                    mobileImgElement.src = myImages[mobileIdx];
                    mobileImgElement.style.opacity = 1;
                }
            }, 500);
        }, 5000);
    }
});

let desktopSlideIndex = 1;
let mobileSlideIndex = 1;

window.plusSlides = function (n, isMobile = false) {
    if (isMobile) {
        showMobileSlides((mobileSlideIndex += n));
    } else {
        showDesktopSlides((desktopSlideIndex += n));
    }
};

function showDesktopSlides(n) {
    let slides = document.querySelectorAll(".myslides-desktop");
    if (!slides || slides.length === 0) return;

    if (n > slides.length) desktopSlideIndex = 1;
    if (n < 1) desktopSlideIndex = slides.length;

    slides.forEach((s) => s.classList.add("hidden"));
    if (slides[desktopSlideIndex - 1]) {
        slides[desktopSlideIndex - 1].classList.remove("hidden");
    }
}

function showMobileSlides(n) {
    let slides = document.querySelectorAll(".myslides-mobile");
    if (!slides || slides.length === 0) return;

    if (n > slides.length) mobileSlideIndex = 1;
    if (n < 1) mobileSlideIndex = slides.length;

    slides.forEach((s) => s.classList.add("hidden"));
    if (slides[mobileSlideIndex - 1]) {
        slides[mobileSlideIndex - 1].classList.remove("hidden");
    }
}
