@extends('errors.template')

@section('title', 'Operation Not Allowed')
@section('details', $exception->getMessage())