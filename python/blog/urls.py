from django.conf.urls import include, url
from . import views

urlpatterns = [
	# primary landing page to show list of posts
    url(r'^$', views.post_list, name='post_list'),
    # Individual posts page
    url(r'^post/(?P<pk>[0-9]+)/$', views.post_detail, name='post_detail'),
    # Create a new post
    url(r'^post/new/$', views.post_new, name='post_new'),
    # Edit a post
    url(r'^post/(?P<pk>[0-9]+)/edit/$', views.post_edit, name='post_edit'),
    # Publish post
    url(r'^post/(?P<pk>[0-9]+)/publish/$', views.post_publish, name='post_publish'),
    # Delete post
    url(r'^post/(?P<pk>[0-9]+)/delete/$', views.post_delete, name='post_delete'),
    # Post comments
    url(r'^post/(?P<pk>[0-9]+)/comment/$', views.add_comment_to_post, name='add_comment_to_post'),
    # Post drafts list page
    url(r'^drafts/$', views.post_draft_list, name='post_draft_list'),
    # Comment approve
    url(r'^comment/(?P<pk>[0-9]+)/approve/$', views.comment_approve, name='comment_approve'),
    # Comment remove
    url(r'^comment/(?P<pk>[0-9]+)/remove/$', views.comment_remove, name='comment_remove'),
]