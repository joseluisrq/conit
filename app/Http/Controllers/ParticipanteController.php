<?php

namespace App\Http\Controllers;
use App\Http\Resources\ParticipanteResource;
use App\Http\Requests\ParticipanteRequest;
use App\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function index()
    {
        return ParticipanteResource::collection(Participante::all()->sortByDesc('id'));
    }
    public function store(ParticipanteRequest $request)
    {
          $participante=Participante::create($request->validated());
          return new ParticipanteResource($participante);
    }
    public function show(Participante $proyecto)
    {
          return new ParticipanteResource($proyecto);
    }
    public function update(Participante $proyecto, ParticipanteRequest $request )
    {
      $proyecto->update($request->validated());
      return new ParticipanteResource($proyecto);
    }
    public function destroy(Participante $proyecto )
    {
      $proyecto->delete();
      return response(null,204);
    }

}
