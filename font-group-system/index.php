<?php include("templates/header.php"); ?>

<div class="container">
    <h2>Upload a Font (TTF Only)</h2>
    <label for="fontUpload" class="button">Click to upload a TTF file</label>
    <input type="file" id="fontUpload" accept=".ttf">

    <h2>Uploaded Fonts</h2>
    <div id="fontList">
    </div>

    <h2>Create Font Group</h2>
    <form id="fontGroupForm" method="post" action="ajax/create_group.php">
        <input type="text" name="groupName" placeholder="Group Name" required>
        
        <div id="fontGroupRows">
            <div>
                <select name="font[]" required>
                    <option value="">Select a Font</option>
                </select>
                <button type="button" class="removeRow" style="display:none;">Remove</button>
            </div>
        </div>
        <button type="button" id="addRow" class="addRow">Add Font</button>

        <button type="submit" class="button">Create Group</button>
    </form>

    <h2>Font Groups</h2>
    <div id="fontGroupList">
    </div>
</div>

<?php include("templates/footer.php"); ?>
