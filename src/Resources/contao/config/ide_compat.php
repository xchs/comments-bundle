<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// This file is not used in Contao. Its only purpose is to make PHP IDEs like
// Eclipse, Zend Studio or PHPStorm realize the class origins, since the dynamic
// class aliasing we are using is a bit too complex for them to understand.

namespace  {
	class Comments extends \Contao\Comments {}
	class ContentComments extends \Contao\ContentComments {}
	class CommentsModel extends \Contao\CommentsModel {}
	class CommentsNotifyModel extends \Contao\CommentsNotifyModel {}
	class ModuleComments extends \Contao\ModuleComments {}
}
