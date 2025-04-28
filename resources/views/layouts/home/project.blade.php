<section class="bg-white py-16">
    <div class="container mx-auto max-w-6xl px-4">
        <!-- Section Heading -->
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-gray-900 mb-3">Portfolio</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Check my commercial and non commercial projects.
                <br>If you have any questions feel free to ask me for more information.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center mb-12 gap-2">
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-900 text-white text-sm font-medium" data-filter="all">All (6)</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium" data-filter="web">Web Development (3)</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-medium" data-filter="graphic">Graphic Designer (3)</button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="projects-grid">
            <!-- Web Development Projects -->
            {{-- PROJECT 1 --}}
            <div class="project-card web mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/1.jpg') }}" alt="COVID-19 Data and Statistics" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Prakata.pro</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">php</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">tailwind</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">postgresql</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            Allow the user to display on charts various statistics related with Covid-19 pandemic.
                        </p>
                        <div class="flex gap-3">
                            <a href="https://prakata.pro/" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 2 --}}
            <div class="project-card web mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/2.jpg') }}" alt="COVID-19 Data and Statistics" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Kamarispa.com</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">php</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">tailwind</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">postgresql</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            Allow the user to display on charts various statistics related with Covid-19 pandemic.
                        </p>
                        <div class="flex gap-3">
                            <a href="https://prakata.pro/" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 3 --}}
            <div class="project-card web mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/3.png') }}" alt="COVID-19 Data and Statistics" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Jayadewataacademy.com</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">php</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">tailwind</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">postgresql</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            Allow the user to display on charts various statistics related with Covid-19 pandemic.
                        </p>
                        <div class="flex gap-3">
                            <a href="https://prakata.pro/" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graphic Designer Projects -->
            {{-- PROJECT 1 DEISGN --}}
            <div class="project-card graphic mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/bidan.jpg') }}" alt="Alien Invasion" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Bidan Nova</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Photoshop</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Figma</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Mockup Specialist</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            A game inspired by the classic Atari game Space Invaders.
                        </p>
                        <div class="flex gap-3">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 2 DEISGN --}}
            <div class="project-card graphic mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/alluneed.jpg') }}" alt="Alien Invasion" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Alluneed Digital Indonesia</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Photoshop</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Figma</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Mockup Specialist</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            A game inspired by the classic Atari game Space Invaders.
                        </p>
                        <div class="flex gap-3">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- PROJECT 3 DEISGN --}}
            <div class="project-card graphic mb-6">
                <div class="bg-white rounded shadow-md overflow-hidden h-102">
                    <div class="h-48 overflow-hidden">
                        <img src="{{  asset('img/porto/waroek.jpg') }}" alt="Alien Invasion" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Waroenk Ikatan Cinta</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Photoshop</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Figma</span>
                            <span class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">Mockup Specialist</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-6">
                            A game inspired by the classic Atari game Space Invaders.
                        </p>
                        <div class="flex gap-3">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 bg-gray-900 text-white text-sm rounded">Preview</a>
                            {{-- <a href="#" class="flex items-center gap-2 px-4 py-2 border border-gray-300 text-gray-700 text-sm rounded">Github repo</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Additional Projects can be added here similarly -->
        </div>

        <!-- Pagination -->
        {{-- <div id="pagination" class="flex justify-center mt-8">
            <button id="prev-page" class="px-4 py-2 bg-gray-900 text-white text-sm rounded">Previous</button>
            <span id="page-number" class="mx-4 text-sm text-gray-600">Page 1</span>
            <button id="next-page" class="px-4 py-2 bg-gray-900 text-white text-sm rounded">Next</button>
        </div> --}}

    </div>
</section>

<script>
    // JavaScript to handle dynamic filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    // JavaScript untuk pagination
    const projectCards = document.querySelectorAll('.project-card');
    const projectsPerPage = 6; // Setiap halaman menampilkan 6 card
    let currentPage = 1;

    // Fungsi untuk menampilkan card pada halaman tertentu
    const showPage = (page) => {
        // Menghitung index card yang harus ditampilkan
        const start = (page - 1) * projectsPerPage;
        const end = page * projectsPerPage;

        // Menyembunyikan semua card terlebih dahulu
        projectCards.forEach((card, index) => {
            if (index >= start && index < end) {
                card.style.display = 'block';  // Tampilkan card
            } else {
                card.style.display = 'none';  // Sembunyikan card
            }
        });

        // Update nomor halaman
        document.getElementById('page-number').textContent = `Page ${page}`;
    };

    // Menampilkan halaman pertama saat awal
    showPage(currentPage);

    // Menambahkan event listener untuk tombol "Previous"
    document.getElementById('prev-page').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;  // Menurunkan halaman
            showPage(currentPage);  // Menampilkan card untuk halaman yang baru
        }
    });

    // Menambahkan event listener untuk tombol "Next"
    document.getElementById('next-page').addEventListener('click', () => {
        const totalPages = Math.ceil(projectCards.length / projectsPerPage);
        if (currentPage < totalPages) {
            currentPage++;  // Meningkatkan halaman
            showPage(currentPage);  // Menampilkan card untuk halaman yang baru
        }
    });


    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            projectCards.forEach(card => {
                if (filter === 'all') {
                    card.style.display = 'block';
                } else if (card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Select the filter buttons and project containers
    const allButton = document.getElementById('all');
    const webDevButton = document.getElementById('webDev');
    const graphicDesignButton = document.getElementById('graphicDesign');

    const webDevProjects = document.getElementById('webDevProjects');
    const graphicDesignProjects = document.getElementById('graphicDesignProjects');

    // Show all projects
    allButton.addEventListener('click', () => {
        webDevProjects.classList.remove('hidden');
        graphicDesignProjects.classList.remove('hidden');
        webDevButton.classList.add('bg-gray-900', 'text-white');
        graphicDesignButton.classList.add('bg-gray-100', 'text-gray-700');
        allButton.classList.remove('bg-gray-100', 'text-gray-700');
    });

    // Show Web Development projects
    webDevButton.addEventListener('click', () => {
        webDevProjects.classList.remove('hidden');
        graphicDesignProjects.classList.add('hidden');
        webDevButton.classList.remove('bg-gray-100', 'text-gray-700');
        graphicDesignButton.classList.add('bg-gray-100', 'text-gray-700');
        allButton.classList.add('bg-gray-100', 'text-gray-700');
    });

    // Show Graphic Design projects
    graphicDesignButton.addEventListener('click', () => {
        webDevProjects.classList.add('hidden');
        graphicDesignProjects.classList.remove('hidden');
        graphicDesignButton.classList.remove('bg-gray-100', 'text-gray-700');
        webDevButton.classList.add('bg-gray-100', 'text-gray-700');
        allButton.classList.add('bg-gray-100', 'text-gray-700');
    });
</script>
