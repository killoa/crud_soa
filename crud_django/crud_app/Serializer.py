from rest_framework import serializers 
from crud_app.models import Article
 
 
class ArticleSerializer(serializers.ModelSerializer):
 
    class Meta:
        model = Article
        fields = ('id',
                  'title',
                  'description',
                  'published')