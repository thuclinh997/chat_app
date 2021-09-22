<?php
while ($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM message
        WHERE (incoming_id = {$row['unique_id']} OR outgoing_id = {$row['unique_id']})
        AND (outgoing_id = $outgoing_id OR incoming_id = $outgoing_id)
        ORDER BY id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if (mysqli_num_rows($query2) > 0) {
        $result = $row2['message'];
    } else {
        $result = "No message available";
    }
    //trimming message if word are more than 28
    (strlen($result) > 28) ? $message = substr($result, 0, 28) . '...' : $message = $result;
    //check user in online of offline
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
    $output .= '<a href="chat.php?unique_id=' . $row['unique_id'] . '">
                <div class="content">
                    <img src="php/images/' . $row['image'] . '" alt="">
                    <div class="detail">
                        <span>' . $row['fname'] . $row['lname'] . '</span>
                        <p>' . $message . '</p>
                    </div>
                </div>
                <div class="status-dot ' . $offline . '">
                    <i class="fa fa-circle"></i>
                </div>
            </a>';
}
