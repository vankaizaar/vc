@extends('errors.template')

@section('title', 'Page Not Found')
@section('details', $exception->getMessage())