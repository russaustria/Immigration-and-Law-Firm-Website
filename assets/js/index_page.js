// Function to enable/disable parts based on checkbox state
function updateParts() {
    // Part 1 checkboxes
    var part1Checkboxes = [
        "Airline Ticket",
        "Vacation Packages",
        "Fly Now, Pay Later",
        "Enjoy Now, Pay Later",
        "Immigration",
        "Divorce & Small Claims",
        "Recognition of Divorce (Philippines)",
        "Annulment & International Adoption",
        "Will & Power of Attorney",
        "Registration of Will & POA",
        "Notary / Commissioner of Oaths",
        "SPA, Affidavits & Other Legal Documents",
        "Incorporation & Business Registration",
    ];

    // Part 2 checkboxes
    var part2Checkboxes = [
        "NBI Clearance (Renewal)",
        "Police Clearance (Local)",
        "Police Clearance (International)",
        "Authentication",
        "PSA-Marriage Certificate",
        "PSA-Certificate of No Marriage",
        "PSA-Birth Certificate",
        "PSA-Death Certificate",
        "Affidavit of Denial (If w/ NBI HIT)",
        "Certified True Copy NNAS",
        "Immigrate Now, Pay Later",
        "Consumer Loan", // Corrected to match the checkbox ID
    ];

    // Part 3 checkboxes
    var part3Checkboxes = [
        "Remittance",
        "Remit Now, Pay Later",
    ];

    var part4Checkboxes = [
        "Airline Ticket",
        "Vacation Packages",
        "Fly Now, Pay Later",
        "Enjoy Now, Pay Later",
        "Immigration",
        "Divorce & Small Claims",
        "Recognition of Divorce (Philippines)",
        "Annulment & International Adoption",
        "Will & Power of Attorney",
        "Registration of Will & POA",
        "Notary / Commissioner of Oaths",
        "SPA, Affidavits & Other Legal Documents",
        "Incorporation & Business Registration",
        "NBI Clearance (Renewal)",
        "Police Clearance (Local)",
        "Police Clearance (International)",
        "Authentication",
        "PSA-Marriage Certificate",
        "PSA-Certificate of No Marriage",
        "PSA-Birth Certificate",
        "PSA-Death Certificate",
        "Affidavit of Denial (If w/ NBI HIT)",
        "Certified True Copy NNAS",
        "Immigrate Now, Pay Later",
        "Consumer Loan", // Corrected to match the checkbox ID
        "Remittance",
        "Remit Now, Pay Later",
    ];

    var part5Checkboxes = [
        "Airline Ticket",
        "Vacation Packages",
        "Fly Now, Pay Later",
        "Enjoy Now, Pay Later",
        "Immigration",
        "Divorce & Small Claims",
        "Recognition of Divorce (Philippines)",
        "Annulment & International Adoption",
        "Will & Power of Attorney",
        "Registration of Will & POA",
        "Notary / Commissioner of Oaths",
        "SPA, Affidavits & Other Legal Documents",
        "Incorporation & Business Registration",
        "NBI Clearance (Renewal)",
        "Police Clearance (Local)",
        "Police Clearance (International)",
        "Authentication",
        "PSA-Marriage Certificate",
        "PSA-Certificate of No Marriage",
        "PSA-Birth Certificate",
        "PSA-Death Certificate",
        "Affidavit of Denial (If w/ NBI HIT)",
        "Certified True Copy NNAS",
        "Immigrate Now, Pay Later",
        "Consumer Loan", // Corrected to match the checkbox ID
        "Remittance",
        "Remit Now, Pay Later",
    ];

    var part1Enabled = part1Checkboxes.some(function (checkbox) {
        return document.getElementById(checkbox).checked;
    });

    var part2Enabled = part2Checkboxes.some(function (checkbox) {
        return document.getElementById(checkbox).checked;
    });

    var part3Enabled = part3Checkboxes.some(function (checkbox) {
        return document.getElementById(checkbox).checked;
    });

    var part4Enabled = part4Checkboxes.some(function (checkbox) {
        return document.getElementById(checkbox).checked;
    });

    var part5Enabled = part5Checkboxes.some(function (checkbox) {
        return document.getElementById(checkbox).checked;
    });

    // Enable or disable Part 1 based on checkbox state
    document.getElementById("btn-pt1").disabled = !(part1Enabled || part2Enabled || part3Enabled || part4Enabled || part5Enabled );

    // Enable Part 2 only if Part 2 checkboxes are checked
    document.getElementById("btn-pt2").disabled = !part2Enabled;

    // Enable Part 3 only if all Part 3 checkboxes are checked
    document.getElementById("btn-pt3").disabled = !part3Enabled;

    // Enable Part 4 only if all Part 4 checkboxes are checked
    document.getElementById("btn-pt4").disabled = !part4Enabled;

    // Enable Part 5 only if all Part 4 checkboxes are checked
    document.getElementById("btn-pt5").disabled = !part5Enabled;
}

// Add event listener to checkboxes to call the function
document.addEventListener('DOMContentLoaded', function () {
    // Initially, disable all buttons
    document.getElementById("btn-pt1").disabled = true;
    document.getElementById("btn-pt2").disabled = true;
    document.getElementById("btn-pt3").disabled = true;
    document.getElementById("btn-pt4").disabled = true;
    document.getElementById("btn-pt5").disabled = true;

    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateParts);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Add an event listener to the checkbox
    document.getElementById("NBI_Clearance_New_Applicant").addEventListener("change", function () {
        // Check if the checkbox is checked
        if (this.checked) {
            // If checked, show the message panel
            openMessagePanel();
        }
    });
});

function openMessagePanel() {
    document.getElementById("messageOverlay").style.display = "flex";
}

function closeMessagePanel() {
    document.getElementById("messageOverlay").style.display = "none";
}

////

