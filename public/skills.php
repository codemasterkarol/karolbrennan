<?php
$languages = [
    'HTML', 'CSS', 'PHP / OOPHP', 'MySQL', 'JavaScript', 'SASS'
];
$frameworks = [
    'jQuery', 'CSS Frameworks', 'Foundation', 'Bootstrap', 'Materialize CSS',
    'Nova (Simple MVC) Framework', 'Zend Framework 1'
];
$tools = [
    'Sharepoint Designer', 'Git', 'Subversion', 'Vagrant', 'Ansible',
    'MySQL Workbench', 'WordPress', 'SMACSS',
    'LAMP Stack', 'Agile / Scrum Development'
]; ?>


<section id="skills" class="relative" data-anchor="skills"><a id="skills"></a>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2>Stuff I Know</h2>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 hide-on-small-only"></div>
            <div class="col s12 m6">
                <?php echo "<h3>Languages</h3><p>";
                foreach($languages as $language){
                    echo "<span>{$language}</span> ";
                }
                echo "</p>"; ?>
                <?php echo "<h3>Tools &amp; Platforms</h3><p>";
                foreach($tools as $tool){
                    echo "<span>{$tool}</span> ";
                }
                echo "</p>"; ?>
                <?php echo "<h3>Frameworks</h3><p>";
                foreach($frameworks as $framework){
                    echo "<span>{$framework}</span> ";
                }
                echo "</p>"; ?>
            </div>
        </div>
    </div>
</section>
