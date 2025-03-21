function addGoal() {
    let goalInput = document.getElementById("goalInput").value;
    let goalCategory = document.getElementById("goalCategory").value;
    
    if (goalInput === "") {
        alert("Please enter a goal before setting it.");
        return;
    }
    
    alert(`Goal Added: ${goalInput} (${goalCategory})`);
    document.getElementById("goalInput").value = "";
}

function addTracking() {
    let trackingCategory = document.getElementById("trackingCategory").value;
    let trackingInput = document.getElementById("trackingInput").value;
    
    if (trackingInput === "") {
        alert("Please enter tracking data before adding.");
        return;
    }
    
    alert(`Tracking Added: ${trackingInput} (${trackingCategory})`);
    document.getElementById("trackingInput").value = "";
}
