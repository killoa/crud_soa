from django.urls import include, path 
from crud_app import views 
 
urlpatterns = [ 
    path(r'api/article', views.article_list),
    path(r'api/article/<int:pk>', views.article_detail),
    path(r'api/article/published', views.article_list_published)
]