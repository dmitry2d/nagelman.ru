

<?php
/**
 * Section Sidebar
 */

?>

<div class="section__sidebar">
    <?php get_sidebar(); ?>
</div>

<style>

    .section__sidebar {
        border: 1px solid #f2f2f2;
        padding: 10px;
        border-radius: 4px;
    }
    .section__sidebar * {
        font-size: 15px!important;
    }
    .section__sidebar .recent-posts-extended h3 {
        text-transform: none;
        color: rgba(var(--color-basetext),1);
        font-size: 15px;
        font-weight: 800;
        padding: 0;

    }
    .section__sidebar .recent-posts-extended h3:before,
    .section__sidebar .recent-posts-extended h3:after {
        display: none;
    }
    .section__sidebar .recent-posts-extended h3.rpwe-title {
        font-size: 15px!important;
        font-weight: 500;
        display: block!important;
        width: 240px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .section__sidebar .recent-posts-extended .rpwe-time {
        display: none;
    }
    .section__sidebar .recent-posts-extended li {
        border: none;
        margin: 0;
        padding: 5px 0;
    }
    .section__sidebar .widget_search {
        margin-bottom: 10px;
    }
    .section__sidebar .widget_search input[type="text"] {
        font-size: 15px;
        color: rgba(var(--color-basetext),1);
        margin: 0;
        padding: 25px;
        background: #f8f8f8;
        border: 1px solid #f2f2f2;
        outline: none;
        border-radius: 10px 0 0 10px;

    }
    .section__sidebar .widget_search button#searchsubmit {
        color: white;
        background-color: rgba(var(--color-highlight),1);
        cursor: pointer;
        height: 100%;
        content: "";
        width: 53px;
        border: none;
        border-radius: 0 10px 10px 0;
        outline: none;
        font-size: 19px;
        font-weight: 400;
    }
    .section__sidebar .widget_search button#searchsubmit * {
        color: white!important;
    }


    @media screen and (max-width: 800px) {
        .section__sidebar {
            display: none;
        }
    }

</style>
