clonetana
=======

Install xampp by following instructions in 'insturctions'

when installing mysql, use password 'bestpassword'

run catan.sql in mysql to load up the database



placed clones folder into the htdocs folder,

view the game by going to localhost/soc/viewgame



Application Flow
=======
application/controllers/homepage
 important function is creategame() and viewgame()
 create game calls board_construction which is in application/models/soc
 
viewgame() calls html view from application/views/test_view()

javascript in top_level (js) css found in (css)
