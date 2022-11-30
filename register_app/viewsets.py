from .models import Position,Employee
from rest_framework import viewsets
from .serializers import PositionSerializer,EmployeeSerializer

class PositionViewSet (viewsets.ModelViewSet):
    queryset=Position.objects.all()
    serializer_class=PositionSerializer
    http_method_name=['get','post','put','delete']

class EmployeeViewSet (viewsets.ModelViewSet):
    queryset=Employee.objects.all()
    serializer_class=EmployeeSerializer
    http_method_name=['get','post','put','delete']