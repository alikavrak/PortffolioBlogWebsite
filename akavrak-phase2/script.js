// script.js

document.addEventListener("DOMContentLoaded", function () {
    // Clear button for Add Post form
    const clearBtn = document.getElementById("clearBtn");
    if (clearBtn) {
        clearBtn.addEventListener("click", function () {
            document.getElementById("postTitle").value = "";
            document.getElementById("postContent").value = "";
            const charCount = document.getElementById("charCount");
            if (charCount) {
                charCount.textContent = "0";
            }
        });
    }

    // Character counter for textarea
    const postContent = document.getElementById("postContent");
    const charCount = document.getElementById("charCount");

    if (postContent && charCount) {
        postContent.addEventListener("input", function () {
            charCount.textContent = postContent.value.length;
        });
    }

    // Blog yazılarını LocalStorage'dan al ve ekrana yazdır (eski yöntem - artık kullanılmıyor)
    displayBlogPosts();

    // Mesajları göster (contact.html için)
    displayMessages();
});

// Eskiden LocalStorage ile kullanılan işlevler
function displayBlogPosts() {
    const blogContainer = document.getElementById("blog-posts");
    if (!blogContainer) return;

    let blogPosts = JSON.parse(localStorage.getItem("blogPosts")) || [];

    blogContainer.innerHTML = "";

    if (blogPosts.length === 0) {
        blogContainer.innerHTML = "<p>No blog posts found.</p>";
        return;
    }

    blogPosts.forEach(post => {
        const postElement = document.createElement("div");
        postElement.classList.add("blog-post");

        postElement.innerHTML = `
            <h3>${post.title}</h3>
            <p class="date">${post.date}</p>
            <p>${post.content}</p>
        `;

        blogContainer.appendChild(postElement);
    });
}

function displayMessages() {
    const messagesList = document.getElementById("messages-list");
    if (!messagesList) return;

    let messages = JSON.parse(localStorage.getItem("messages")) || [];

    messagesList.innerHTML = "";

    if (messages.length === 0) {
        messagesList.innerHTML = "<p>No messages yet.</p>";
        return;
    }

    messages.forEach(msg => {
        const msgElement = document.createElement("div");
        msgElement.classList.add("message");
        msgElement.innerHTML = `
            <p><strong>${msg.name}</strong> (${msg.email})</p>
            <p>${msg.message}</p>
            <p><small>${msg.date}</small></p>
            <hr>
        `;
        messagesList.appendChild(msgElement);
    });
}
