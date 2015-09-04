{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
{!! Form::open(["url" => route("forum.posts.update", $post), "method" => "patch", "data-remote" => true, "class" => "edit-post post-box"]) !!}
	<div class="reply-box-body">
		<textarea required class="js-quick-submit" name="body">{{ $post->bodyRaw }}</textarea>
	</div>

	<div class="post-box-footer">
		@include("forum.topics._post_box_footer", ["submitText" => trans("forum.topic.post_edit.post"), "editing" => true])
	</div>
{!! Form::close() !!}
