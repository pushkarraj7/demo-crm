<?php
$emailPrefill = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - CRM</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/signup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
</head>

<body>
    <div class="signup-container">
        <!-- Signup Form -->
        <div class="signup-form">
            <div class="form-box">
                <div class="logo">
                    <img src="../assets/img/axismobi/photos/logo.png" alt="Axismobi Logo" />
                </div>
                <div class="form-title">Sign Up to Continue...</div>

                <form id="signup-form" method="POST" action="signup_handler.php">
                    <!-- Full Name & Phone -->
                    <div class="input-row">
                        <div class="input-box">
                            <input type="text" name="fullName" id="full-name" placeholder="Full Name" required />
                        </div>
                        <div class="input-box">
                            <input type="tel" name="phone" id="phone-number" placeholder="Phone Number" required />
                        </div>
                    </div>

                    <!-- Email & Password -->
                    <div class="input-row">
                        <div class="input-box">
                            <input type="email" name="email" id="email-input" placeholder="Email Address"
                                value="<?= $emailPrefill ?>" required />
                            <div id="error-message" class="error-message"></div>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" id="password" placeholder="Password" required />
                        </div>
                    </div>

                    <!-- Country & Company Name -->
                    <div class="input-row">
                        <div class="input-box">
                            <select name="country" id="country" class="choices-select" required>
                                <option value="">Select Country</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <input type="text" name="companyName" id="company-name" placeholder="Company Name"
                                required />
                        </div>
                    </div>

                    <!-- Company Address -->
                    <div class="input-box">
                        <textarea name="companyAddress" id="company-address" rows="2" placeholder="Company Address"
                            required></textarea>
                    </div>

                    <!-- Terms -->
                    <div class="terms">
                        By signing up, I accept the Axismobi
                        <a href="#">Terms of Service</a> and acknowledge the
                        <a href="#">Privacy Policy</a>.
                    </div>

                    <button type="submit" class="signup-btn">Sign Up</button>
                </form>
            </div>
        </div>

        <!-- Feature Section -->
        <div class="features-section"></div>
    </div>

    <!-- JS Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="../assets/js/country-list.js"></script>

    <!-- Signup Form JS -->
    <script>
    document.getElementById("signup-form").addEventListener("submit", function(e) {
        e.preventDefault();

        const fullName = document.getElementById("full-name").value.trim();
        const phone = document.getElementById("phone-number").value.trim();
        const email = document.getElementById("email-input").value.trim();
        const password = document.getElementById("password").value.trim();
        const country = document.getElementById("country").value.trim();
        const companyName = document.getElementById("company-name").value.trim();
        const companyAddress = document.getElementById("company-address").value.trim();
        const errorDiv = document.getElementById("error-message");

        errorDiv.style.display = "none";
        errorDiv.textContent = "";

        if (!fullName || !phone || !email || !password || !companyName || !companyAddress) {
            errorDiv.textContent = "Please fill in all fields.";
            errorDiv.style.display = "block";
            return;
        }

        const isValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        if (!isValidEmail) {
            errorDiv.textContent = "Please enter a valid email address.";
            errorDiv.style.display = "block";
            return;
        }

        if (!country) {
            errorDiv.textContent = "Please select a country.";
            errorDiv.style.display = "block";
            return;
        }

        const formData = {
            fullName,
            phone,
            email,
            password,
            country,
            companyName,
            companyAddress
        };

        sessionStorage.setItem("signupFormData", JSON.stringify(formData));

        fetch("signup_handler.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(formData),
            })
            .then((response) => response.text())
            .then((data) => {
                if (data === "success") {
                    // window.location.href = "/multim/pages/review.php";
                    // window.location.href = "review.php"
                    window.location.href = `review.php?email=${encodeURIComponent(email)}`;

                } else {
                    errorDiv.textContent = data;
                    errorDiv.style.display = "block";
                }
            })
            .catch((err) => {
                console.error(err);
                errorDiv.textContent = "An error occurred. Please try again.";
                errorDiv.style.display = "block";
            });
    });
    </script>

    <!-- Feature Cards JS -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const featuresSection = document.querySelector(".features-section");
        const selected = JSON.parse(sessionStorage.getItem("selectedFeatures")) || [];
        const selectedTabId = sessionStorage.getItem("selectedTabId");

        const tabTitleMap = {
            crm: "HR Dashboard",
            marketing: "Finance Dashboard",
            support: "Real Estate Management System",
        };

        const iconMap = {
            attendance: "fa-solid fa-user-check",
            "projects & tasks": "fa-solid fa-tasks",
            "onboard employee": "fa-solid fa-user-plus",
            newsletter: "fa-solid fa-envelope-open-text",
            "weekly performance": "fa-solid fa-chart-line",
            "location & camera login": "fa-solid fa-map-marker-alt",
            "employee review": "fa-solid fa-star-half-alt",
            logs: "fa-solid fa-history",
            "shift incharge checklist": "fa-solid fa-clipboard-check",
            "courses & test": "fa-solid fa-book-reader",
            "onboard vendor": "fa-solid fa-user-tie",
            "purchase order": "fa-solid fa-file-signature",
            "performa invoice": "fa-solid fa-file-invoice-dollar",
            "add invoice": "fa-solid fa-file-invoice",
            "todo list": "fa-solid fa-list-check",
            "multi-organization support": "fa-solid fa-sitemap",
            "onboard occupant/tenant": "fa-solid fa-users",
            "users with custom roles": "fa-solid fa-user-shield",
            "visitor management": "fa-solid fa-id-badge",
            "ticket management": "fa-solid fa-ticket-alt",
            "onboard technician": "fa-solid fa-user-cog",
            "helpdesk info": "fa-solid fa-info-circle",
            "community center": "fa-solid fa-users-cog",
            "billing & invoice": "fa-solid fa-file-invoice-dollar",
            "work permit": "fa-solid fa-clipboard-check",
            gatepass: "fa-solid fa-door-open",
        };

        if (selectedTabId) {
            const tabHeading = document.createElement("h2");
            tabHeading.textContent = tabTitleMap[selectedTabId] || "Selected Dashboard";
            tabHeading.style.marginBottom = "16px";
            tabHeading.style.color = "#f55925";
            tabHeading.style.fontWeight = "700";
            tabHeading.style.fontSize = "20px";
            featuresSection.appendChild(tabHeading);
        }

        if (selected.length > 0) {
            const title = document.createElement("h3");
            title.textContent = "Selected Features";
            title.style.marginBottom = "12px";
            title.style.fontWeight = "600";
            featuresSection.appendChild(title);

            selected.forEach((featureRaw) => {
                const feature = featureRaw.replace(/\n/g, " ").trim().toLowerCase();
                const card = document.createElement("div");
                card.className = "feature-card";
                card.style.display = "flex";
                card.style.alignItems = "center";
                card.style.marginBottom = "10px";

                const iconClass = iconMap[feature] || "fa-solid fa-square";
                const iconEl = document.createElement("i");
                iconEl.className = iconClass;
                iconEl.style.marginRight = "10px";
                iconEl.style.fontSize = "18px";
                iconEl.style.color = "#f55925";

                const text = document.createElement("span");
                text.textContent = featureRaw.trim();

                card.appendChild(iconEl);
                card.appendChild(text);
                featuresSection.appendChild(card);
            });
        }
    });
    </script>

    <!-- Country List + Choices.js Integration -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const countrySelect = document.getElementById("country");
        countrySelect.innerHTML = `<option value=""> Select Country</option>`;

        countryList.forEach((country) => {
            const option = document.createElement("option");
            option.value = country.code;
            option.textContent = country.name;
            option.setAttribute("data-custom-properties", JSON.stringify({
                flag: country.flag
            }));
            countrySelect.appendChild(option);
        });

        new Choices(countrySelect, {
            searchPlaceholderValue: "Search country...",
            shouldSort: true,
            itemSelectText: "",
            callbackOnCreateTemplates: function(template) {
                return {
                    choice: (classNames, data) => {
                        const container = document.createElement("div");
                        container.className = `${classNames.item} ${classNames.itemChoice}`;
                        container.setAttribute("data-choice", "");
                        container.setAttribute("data-id", data.id);
                        container.setAttribute("data-value", data.value);
                        container.setAttribute("role", "option");
                        container.style.display = "flex";
                        container.style.alignItems = "center";
                        container.style.gap = "10px";
                        container.style.padding = "8px 12px";
                        container.style.fontSize = "14px";

                        const img = document.createElement("img");
                        img.width = 18;
                        img.height = 14;
                        img.style.objectFit = "cover";
                        img.src = data.customProperties?.flag ||
                            "https://cdn-icons-png.flaticon.com/512/1045/1045300.png";

                        const label = document.createElement("span");
                        label.textContent = data.label;
                        label.style.fontWeight = "500";
                        label.style.color = "#333";

                        container.appendChild(img);
                        container.appendChild(label);
                        return container;
                    },

                    item: (classNames, data) => {
                        const container = document.createElement("div");
                        container.className =
                            `${classNames.item} ${classNames.itemSelectable}`;
                        container.setAttribute("data-item", "");
                        container.setAttribute("data-id", data.id);
                        container.setAttribute("data-value", data.value);
                        container.setAttribute("aria-selected", "true");
                        container.style.display = "flex";
                        container.style.alignItems = "center";
                        container.style.gap = "8px";

                        const img = document.createElement("img");
                        img.width = 16;
                        img.height = 12;
                        img.style.objectFit = "cover";
                        img.src = data.customProperties?.flag ||
                            "https://cdn-icons-png.flaticon.com/512/1045/1045300.png";

                        const label = document.createElement("span");
                        label.textContent = data.label;
                        label.style.fontWeight = "500";
                        label.style.color = "#333";

                        container.appendChild(img);
                        container.appendChild(label);
                        return container;
                    },
                };
            }
        });
    });
    </script>
</body>

</html>