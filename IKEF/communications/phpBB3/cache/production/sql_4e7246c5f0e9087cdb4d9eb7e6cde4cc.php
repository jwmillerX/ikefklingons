<?php exit; ?>
1565502440
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (ikefphpbb_moderator_cache m) LEFT JOIN ikefphpbb_users u ON (m.user_id = u.user_id) LEFT JOIN ikefphpbb_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}