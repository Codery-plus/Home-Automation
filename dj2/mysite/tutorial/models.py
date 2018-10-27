# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
class Person(models.Model):
    product = models.CharField(max_length=100, verbose_name='product Name',default='0')
    cost = models.CharField(max_length=100, verbose_name='Cost',default='0')
