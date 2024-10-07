document.addEventListener('DOMContentLoaded', () => {
    const blogSection = document.getElementById('blog-section');
    const loadMoreButton = document.getElementById('load-more');

    const _posts = [
        {
            title: "Tips for Grooming Your Dog at Home",
            date: "January 28, 2024",
            image: "grooming-dog.jpeg",
            excerpt: "Grooming your dog at home can be a rewarding experience for both you and your pet. Here are some tips to make the process smooth and enjoyable...",
            link: "grooming-dog.html" // Updated link
        },
        {
            title: "Understanding Cat Grooming Needs",
            date: "July 15, 2024",
            image: "cat-grooming.jpg",
            excerpt: "Cats are often independent creatures, but they still need regular grooming. Learn how to keep your feline friend looking their best and feeling comfortable...",
            link: "cat-grooming.html" // Updated link
        },
        {
            title: "The Importance of Regular Pet Dental Care",
            date: "June 20, 2024",
            image: "dental.jpg",
            excerpt: "Dental health is crucial for pets, just as it is for humans. Discover why regular dental care is essential and how you can maintain your pet's oral hygiene...",
            link: "dental.html" // Updated link
        },
        {
            title: "How to Handle Pet Shedding",
            date: "September 10, 2024",
            image: "pet shedding.jpg",
            excerpt: "Shedding can be a common issue for pet owners. Explore effective strategies and products to manage and reduce shedding in your furry friends...",
            link: "pet-shedding.html" // Updated link
        },
        {
            title: "Essential Grooming Tools for Pets",
            date: "April 5, 2024",
            image: "grooming-tools.jpg",
            excerpt: "Having the right tools makes pet grooming much easier. Learn about the essential grooming tools every pet owner should have in their kit...",
            link: "grooming-tools.html" // Updated link
        },
        {
            title: "Preparing Your Pet for a Professional Grooming Session",
            date: "December 18, 2024",
            image: "professional grooming.jpg",
            excerpt: "Getting your pet ready for a professional grooming session can help make the experience more comfortable. Follow these tips to prepare your pet...",
            link: "professional-grooming.html" // Updated link
        }
    ];

    let currentIndex = 0;
    const itemsPerPage = 3;

    function renderPosts(posts) {
        const fragment = document.createDocumentFragment();

        posts.forEach(post => {
            const article = document.createElement('article');
            article.className = 'blog-post';

            article.innerHTML = `
                <img src="${baseUrl}public/images/blogs/${post.thumbnail}" alt="${post.title}" class="post-image">
                <div class="post-content">
                    <h2>${post.title}</h2>
                    <p class="date">${post.last_updated}</p>
                    <p>${post.description}</p>
                    <a href="view/?blog_id=${post.id}" class="read-more">Read More</a>
                </div>
            `;

            fragment.appendChild(article);
        });
        blogSection.appendChild(fragment);
    }

    function loadMorePosts() {
        loadDoc(currentIndex);
    }

    loadMoreButton.addEventListener('click', loadMorePosts);

    // Initial load
    loadMorePosts();


    function loadDoc(offset) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                renderPosts(JSON.parse(this.responseText))
                currentIndex += itemsPerPage;

                if (currentIndex >= totalBlogs) {
                    loadMoreButton.style.display = 'none';
                }        
            }
        };
        xhttp.open("GET", baseUrl + "utils/blog.php?limit="+itemsPerPage+"&offset="+offset, true);
        xhttp.send();
    }
});
