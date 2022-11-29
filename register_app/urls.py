from django.urls import path,include
from .viewsets import PositionViewSet,EmployeeViewSet
from rest_framework import routers
from . import views

"""
router=routers.DefaultRouter()

router.register(r'Position',PositionViewSet)
router.register(r'Employee',EmployeeViewSet)
"""
urlpatterns=[
    
    path('', views.employee_form,name='employee_insert'), # get and post req. for insert operation
    path('<int:id>/', views.employee_form,name='employee_update'), # get and post req. for update operation
    path('delete/<int:id>/',views.employee_delete,name='employee_delete'),
    path('list/',views.employee_list,name='employee_list') # get req. to retrieve and display all records
]

