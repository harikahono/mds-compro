<section class="py-10 md:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Filter pills -->
        <div class="flex flex-wrap items-center gap-3">
            <button class="rounded-full bg-lime-200 px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-900 active-filter" data-filter="all">All Blogs</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="culture">Culture</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="design">Design</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="trends">Trends</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="advice">Advice</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="craft">Craft CMS</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill" data-filter="spektrix">Spektrix</button>
            <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300">+ More</button>
        </div>

        <!-- Posts grid -->
        <div class="mt-10 grid grid-cols-1 gap-10 sm:gap-12 md:grid-cols-2 lg:grid-cols-3" id="posts-grid">
            <!-- Posts will be loaded here by JavaScript -->
        </div>

        <!-- Pagination -->
        <nav class="mt-10 flex items-center justify-center gap-2" aria-label="Pagination" id="pagination">
            <!-- Pagination will be loaded here by JavaScript -->
        </nav>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const posts = [
        { id: 1, title: 'How Accessible Design Benefits Everyone', excerpt: "Accessible design isn't just for people with disabilities, it improves the experience for everyone.", bg: 'bg-sky-50', img: 'images/landing/post-1.png', category: 'design' },
        { id: 2, title: 'Why You Should Move to Craft CMS 5', excerpt: "Here's what's new in Craft 5, what's better, and why now's the right time to switch.", bg: 'bg-orange-500', img: 'images/landing/post-2.png', category: 'craft' },
        { id: 3, title: '5 Key Digital Marketing Strategies for Success in 2025', excerpt: "As 2025 presents new challenges and opportunities, discover 5 key strategies to guide your success.", bg: 'bg-rose-50', img: 'images/landing/post-3.png', category: 'trends' },
        { id: 4, title: 'Design Systems that Scale', excerpt: 'How we build systems that are flexible, accessible, and easy to maintain.', bg: 'bg-indigo-50', img: 'images/landing/post-4.png', category: 'design' },
        { id: 5, title: 'Level Up Your Website Performance', excerpt: 'Tactics to boost Core Web Vitals and delight your users.', bg: 'bg-emerald-50', img: 'images/landing/post-5.png', category: 'advice' },
        { id: 6, title: 'Content Modeling Best Practices', excerpt: 'Structure content to enable true omnichannel publishing.', bg: 'bg-yellow-50', img: 'images/landing/post-6.png', category: 'craft' },
        { id: 7, title: 'Craft CMS Tips for Editors', excerpt: 'Little features that make a big difference to your workflow.', bg: 'bg-purple-50', img: 'images/landing/post-7.png', category: 'craft' },
        { id: 8, title: 'Modern SEO for Humans', excerpt: 'Practical SEO that respects users and algorithms.', bg: 'bg-blue-50', img: 'images/landing/post-8.png', category: 'advice' },
        { id: 9, title: 'When to Redesign vs. Refactor', excerpt: 'Deciding the right approach to evolve your product.', bg: 'bg-pink-50', img: 'images/landing/post-9.png', category: 'design' },
        { id: 10, title: 'Our Favourite Product Discovery Methods', excerpt: 'Learn techniques we use to reduce risk and find value.', bg: 'bg-teal-50', img: 'images/landing/post-10.png', category: 'advice' },
        { id: 11, title: 'Accessible Forms that Convert', excerpt: 'Design forms that are easy to use and actually get filled.', bg: 'bg-lime-50', img: 'images/landing/post-11.png', category: 'design' }
    ];

    let currentPage = 1;
    let currentFilter = 'all';
    const postsPerPage = 6;

    // Initialize
    renderPosts();
    renderPagination();
    setupFilterHandlers();

    function setupFilterHandlers() {
        const filterButtons = document.querySelectorAll('.filter-pill, .active-filter');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-lime-200', 'text-gray-900');
                    btn.classList.add('border', 'border-gray-200', 'bg-white', 'text-gray-700');
                });
                
                // Add active class to clicked button
                this.classList.remove('border', 'border-gray-200', 'bg-white', 'text-gray-700');
                this.classList.add('bg-lime-200', 'text-gray-900');
                
                // Update current filter and reset to page 1
                currentFilter = this.dataset.filter;
                currentPage = 1;
                
                // Re-render
                renderPosts();
                renderPagination();
            });
        });
    }

    function getFilteredPosts() {
        if (currentFilter === 'all') {
            return posts;
        }
        return posts.filter(post => post.category === currentFilter);
    }

    function renderPosts() {
        const grid = document.getElementById('posts-grid');
        const filteredPosts = getFilteredPosts();
        const startIndex = (currentPage - 1) * postsPerPage;
        const paginatedPosts = filteredPosts.slice(startIndex, startIndex + postsPerPage);
        
        grid.innerHTML = paginatedPosts.map(post => `
            <article class="group" data-category="${post.category}">
                <div class="overflow-hidden rounded-3xl ${post.bg} p-8">
                    <div class="aspect-[4/3] w-full overflow-hidden rounded-2xl bg-white ring-1 ring-black/5">
                        <img src="${post.img}" alt="${post.title}" class="h-full w-full object-cover transition duration-300 group-hover:scale-[1.02]" onerror="this.style.display='none'" />
                    </div>
                </div>
                <h3 class="mt-6 text-xl font-extrabold leading-snug tracking-tight text-gray-900 group-hover:underline">${post.title}</h3>
                <p class="mt-2 text-sm leading-6 text-gray-600">${post.excerpt}</p>
            </article>
        `).join('');
    }

    function renderPagination() {
        const pagination = document.getElementById('pagination');
        const filteredPosts = getFilteredPosts();
        const totalPages = Math.ceil(filteredPosts.length / postsPerPage);
        
        if (totalPages <= 1) {
            pagination.innerHTML = '';
            return;
        }

        let paginationHTML = `
            <button class="rounded-full border border-gray-200 px-3 py-2 text-sm font-medium ${currentPage === 1 ? 'pointer-events-none text-gray-400' : 'text-gray-700 hover:bg-gray-50'}" 
                    onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
                Prev
            </button>
        `;

        for (let i = 1; i <= totalPages; i++) {
            paginationHTML += `
                <button class="rounded-full px-3 py-2 text-sm font-semibold ${i === currentPage ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-50 border border-gray-200'}" 
                        onclick="changePage(${i})">
                    ${i}
                </button>
            `;
        }

        paginationHTML += `
            <button class="rounded-full border border-gray-200 px-3 py-2 text-sm font-medium ${currentPage === totalPages ? 'pointer-events-none text-gray-400' : 'text-gray-700 hover:bg-gray-50'}" 
                    onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
                Next
            </button>
        `;

        pagination.innerHTML = paginationHTML;
    }

    // Expose changePage to global scope for onclick handlers
    window.changePage = function(page) {
        const filteredPosts = getFilteredPosts();
        const totalPages = Math.ceil(filteredPosts.length / postsPerPage);
        
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            renderPosts();
            renderPagination();
        }
    };
});
</script>