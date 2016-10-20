@foreach ($users as $user)
    <tr {!! !$user->seen? 'class="warning"' : '' !!}>
        <td class="text-primary"><strong>{{ $user->username }}</strong></td>
        <td>{{ $user->role->title }}</td>
        <td>
			<input type="checkbox" name="seen" value="{{ $user->id }}" {!! $user->seen ? 'checked':''  !!}>
		</td>
		<td>
			<a class="btn btn-success btn-block" href="{{ route('user.show', ['user' => $user->id]) }}">
				<i class="fa fa-eye" aria-hidden="true"></i>
				see
			</a>
		</td>
		<td>
			<a class="btn btn-warning btn-block" href="{{ route('user.edit', ['user' => $user->id]) }}">
				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				edit
			</a>
		</td>
		<td>
			<form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button class="btn btn-danger btn-block btn-destroy" type="submit">
					<i class="fa fa-trash-o" aria-hidden="true"></i>
					destroy
				</button>
			</form>
		</td>
    </tr>
@endforeach

