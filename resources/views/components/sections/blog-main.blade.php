<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section with AOS</title>
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .filter-pill {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .filter-pill:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .active-filter {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(132, 204, 22, 0.4);
            }
            50% {
                box-shadow: 0 0 0 8px rgba(132, 204, 22, 0);
            }
        }
        
        .blog-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
        }
        
        .pagination-btn {
            transition: all 0.3s ease;
        }
        
        .pagination-btn:hover:not(:disabled) {
            transform: scale(1.05);
        }
        
        /* Stagger animation for cards */
        .blog-card:nth-child(1) { animation-delay: 0.1s; }
        .blog-card:nth-child(2) { animation-delay: 0.2s; }
        .blog-card:nth-child(3) { animation-delay: 0.3s; }
        .blog-card:nth-child(4) { animation-delay: 0.4s; }
        .blog-card:nth-child(5) { animation-delay: 0.5s; }
        .blog-card:nth-child(6) { animation-delay: 0.6s; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Blog Section -->
    <section class="py-10 md:py-16" data-aos="fade-up" data-aos-duration="800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Latest Insights</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover articles, tips, and trends from our team of experts</p>
            </div>

            <!-- Filter pills with AOS -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-12" 
                 data-aos="fade-up" 
                 data-aos-delay="300">
                <button class="rounded-full bg-lime-200 px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-900 active-filter filter-pill transition-all duration-300" 
                        data-filter="all">All Blogs</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="culture">Culture</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="design">Design</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="trends">Trends</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="advice">Advice</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="craft">Craft CMS</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300" 
                        data-filter="spektrix">Spektrix</button>
                <button class="rounded-full border border-gray-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-wide text-gray-700 hover:border-gray-300 filter-pill transition-all duration-300">+ More</button>
            </div>

            <!-- Posts grid with AOS -->
            <div class="mt-10 grid grid-cols-1 gap-10 sm:gap-12 md:grid-cols-2 lg:grid-cols-3" id="posts-grid">
                <!-- Posts will be loaded here by JavaScript -->
            </div>

            <!-- Pagination with AOS -->
            <nav class="mt-10 flex items-center justify-center gap-2" 
                 aria-label="Pagination" 
                 id="pagination"
                 data-aos="fade-up"
                 data-aos-delay="400">
                <!-- Pagination will be loaded here by JavaScript -->
            </nav>
        </div>
    </section>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 100,
                mirror: false
            });

            const posts = [
                { 
                    id: 1, 
                    title: 'How Accessible Design Benefits Everyone', 
                    excerpt: "Accessible design isn't just for people with disabilities, it improves the experience for everyone.", 
                    bg: 'bg-sky-50', 
                    img: 'https://images.unsplash.com/photo-1558655146-9f40138edfeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'design',
                    date: 'May 15, 2024',
                    readTime: '5 min read'
                },
                { 
                    id: 2, 
                    title: 'Why You Should Move to Craft CMS 5', 
                    excerpt: "Here's what's new in Craft 5, what's better, and why now's the right time to switch.", 
                    bg: 'bg-orange-50', 
                    img: 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'craft',
                    date: 'April 28, 2024',
                    readTime: '7 min read'
                },
                { 
                    id: 3, 
                    title: '5 Key Digital Marketing Strategies for Success in 2025', 
                    excerpt: "As 2025 presents new challenges and opportunities, discover 5 key strategies to guide your success.", 
                    bg: 'bg-rose-50', 
                    img: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'trends',
                    date: 'April 12, 2024',
                    readTime: '8 min read'
                },
                { 
                    id: 4, 
                    title: 'Design Systems that Scale', 
                    excerpt: 'How we build systems that are flexible, accessible, and easy to maintain.', 
                    bg: 'bg-indigo-50', 
                    img: 'https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'design',
                    date: 'March 30, 2024',
                    readTime: '6 min read'
                },
                { 
                    id: 5, 
                    title: 'Level Up Your Website Performance', 
                    excerpt: 'Tactics to boost Core Web Vitals and delight your users.', 
                    bg: 'bg-emerald-50', 
                    img: 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'advice',
                    date: 'March 18, 2024',
                    readTime: '4 min read'
                },
                { 
                    id: 6, 
                    title: 'Content Modeling Best Practices', 
                    excerpt: 'Structure content to enable true omnichannel publishing.', 
                    bg: 'bg-yellow-50', 
                    img: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'craft',
                    date: 'March 5, 2024',
                    readTime: '9 min read'
                },
                { 
                    id: 7, 
                    title: 'Craft CMS Tips for Editors', 
                    excerpt: 'Little features that make a big difference to your workflow.', 
                    bg: 'bg-purple-50', 
                    img: 'https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'craft',
                    date: 'February 22, 2024',
                    readTime: '5 min read'
                },
                { 
                    id: 8, 
                    title: 'Modern SEO for Humans', 
                    excerpt: 'Practical SEO that respects users and algorithms.', 
                    bg: 'bg-blue-50', 
                    img: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'advice',
                    date: 'February 10, 2024',
                    readTime: '7 min read'
                },
                { 
                    id: 9, 
                    title: 'When to Redesign vs. Refactor', 
                    excerpt: 'Deciding the right approach to evolve your product.', 
                    bg: 'bg-pink-50', 
                    img: 'https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'design',
                    date: 'January 28, 2024',
                    readTime: '6 min read'
                },
                { 
                    id: 10, 
                    title: 'Our Favourite Product Discovery Methods', 
                    excerpt: 'Learn techniques we use to reduce risk and find value.', 
                    bg: 'bg-teal-50', 
                    img: 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'advice',
                    date: 'January 15, 2024',
                    readTime: '8 min read'
                },
                { 
                    id: 11, 
                    title: 'Accessible Forms that Convert', 
                    excerpt: 'Design forms that are easy to use and actually get filled.', 
                    bg: 'bg-lime-50', 
                    img: 'https://images.unsplash.com/photo-1551836026-d5c088e9cdcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80', 
                    category: 'design',
                    date: 'January 3, 2024',
                    readTime: '5 min read'
                }
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
                        // Add click animation
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = '';
                        }, 150);

                        // Remove active class from all buttons
                        filterButtons.forEach(btn => {
                            btn.classList.remove('bg-lime-200', 'text-gray-900', 'active-filter');
                            btn.classList.add('border', 'border-gray-200', 'bg-white', 'text-gray-700');
                        });
                        
                        // Add active class to clicked button
                        this.classList.remove('border', 'border-gray-200', 'bg-white', 'text-gray-700');
                        this.classList.add('bg-lime-200', 'text-gray-900', 'active-filter');
                        
                        // Update current filter and reset to page 1
                        currentFilter = this.dataset.filter;
                        currentPage = 1;
                        
                        // Re-render with animation
                        animateFilterChange();
                    });
                });
            }

            function animateFilterChange() {
                const grid = document.getElementById('posts-grid');
                
                // Fade out current posts
                grid.style.opacity = '0';
                grid.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    renderPosts();
                    renderPagination();
                    
                    // Fade in new posts
                    grid.style.opacity = '1';
                    grid.style.transform = 'translateY(0)';
                    grid.style.transition = 'all 0.4s ease';
                }, 300);
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
                
                grid.innerHTML = paginatedPosts.map((post, index) => `
                    <article class="group blog-card" 
                             data-category="${post.category}"
                             data-aos="fade-up"
                             data-aos-delay="${index * 100}">
                        <div class="overflow-hidden rounded-3xl ${post.bg} p-8 transition-all duration-300 group-hover:shadow-xl">
                            <div class="aspect-[4/3] w-full overflow-hidden rounded-2xl bg-white ring-1 ring-black/5">
                                <img src="${post.img}" alt="${post.title}" 
                                     class="h-full w-full object-cover transition duration-500 group-hover:scale-110" 
                                     onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex items-center gap-4 text-xs text-gray-500 mb-2">
                                <span class="font-medium uppercase tracking-wide">${post.category}</span>
                                <span>•</span>
                                <span>${post.date}</span>
                                <span>•</span>
                                <span>${post.readTime}</span>
                            </div>
                            <h3 class="text-xl font-extrabold leading-snug tracking-tight text-gray-900 transition-colors duration-300 group-hover:text-lime-600">${post.title}</h3>
                            <p class="mt-2 text-sm leading-6 text-gray-600">${post.excerpt}</p>
                            <div class="mt-4 flex items-center text-sm font-medium text-lime-600 opacity-0 transition-all duration-300 group-hover:opacity-100">
                                Read article
                                <svg class="ml-1 h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </div>
                        </div>
                    </article>
                `).join('');

                // Re-initialize AOS for new elements
                AOS.refresh();
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
                    <button class="rounded-full border border-gray-200 px-4 py-2 text-sm font-medium pagination-btn transition-all duration-300 ${
                        currentPage === 1 ? 'pointer-events-none text-gray-400' : 'text-gray-700 hover:bg-gray-50 hover:border-gray-300'
                    }" 
                            onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>
                        <span class="flex items-center gap-1">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Previous
                        </span>
                    </button>
                `;

                // Show page numbers
                for (let i = 1; i <= totalPages; i++) {
                    if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                        paginationHTML += `
                            <button class="rounded-full px-4 py-2 text-sm font-semibold pagination-btn transition-all duration-300 ${
                                i === currentPage ? 'bg-gray-900 text-white shadow-lg' : 'text-gray-700 hover:bg-gray-50 border border-gray-200 hover:border-gray-300'
                            }" 
                                    onclick="changePage(${i})">
                                ${i}
                            </button>
                        `;
                    } else if (i === currentPage - 2 || i === currentPage + 2) {
                        paginationHTML += `<span class="px-2 text-gray-500">...</span>`;
                    }
                }

                paginationHTML += `
                    <button class="rounded-full border border-gray-200 px-4 py-2 text-sm font-medium pagination-btn transition-all duration-300 ${
                        currentPage === totalPages ? 'pointer-events-none text-gray-400' : 'text-gray-700 hover:bg-gray-50 hover:border-gray-300'
                    }" 
                            onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>
                        <span class="flex items-center gap-1">
                            Next
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
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
                    
                    // Scroll to top of posts grid
                    document.getElementById('posts-grid').scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    renderPosts();
                    renderPagination();
                }
            };
        });
    </script>
</body>
</html>