// Wait for the DOM to load
document.addEventListener("DOMContentLoaded", () => {
  const addSkillsBtn = document.querySelector("button:nth-child(1)");
  const setPreferencesBtn = document.querySelector("button:nth-child(2)");
    const form = document.getElementById("profileForm");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const skill = document.getElementById("skill").value.trim();
    const preference = document.getElementById("preference").value.trim();

    if (skill === "" || preference === "") {
      alert("❌ Please fill out all fields.");
      return;
    }

    if (skill.length < 2) {
      alert("❌ Skill must be at least 2 characters.");
      return;
    }

    if (preference.length < 3) {
      alert("❌ Preference must be at least 3 characters.");
      return;
    }

    alert(`✅ Profile updated:\nSkill: ${skill}\nPreference: ${preference}`);
    form.reset(); // Clear the form
  });


  // Add Skills Click
  addSkillsBtn.addEventListener("click", () => {
    const skill = prompt("Enter a new skill you’ve learned:");
    if (skill) {
      alert(`✅ Skill "${skill}" added successfully!`);
    }
  });

  // Set Preferences Click
  setPreferencesBtn.addEventListener("click", () => {
    const interest = prompt("What type of internships are you interested in?");
    if (interest) {
      alert(`🎯 Preferences updated to: ${interest}`);
    }
  });

  // Fake stat animation (optional)
  const stats = document.querySelectorAll(".stat-box h2");
  stats.forEach((stat) => {
    let endValue = parseInt(stat.textContent);
    let count = 0;
    let increment = endValue / 50;
    let interval = setInterval(() => {
      count += increment;
      stat.textContent = Math.floor(count);
      if (count >= endValue) {
        stat.textContent = endValue;
        clearInterval(interval);
      }
    }, 30);
  });
});
