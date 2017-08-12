---
view::extends: _includes.ru.docs_post_base
view::yields: post_body
pageTitle: Forms
---
@verbatim
# Формы
----------
 
Форма является независимой частью приложения, которая принимает на себя функцию контроллера и служит для реализации CRUD или расширения существующих функций.

ORCHID имеет две формы:
1. Основная
1. Реализующая


### Основная форма

Основная форма отличается от реализации только тем, что можно `подключить неограниченное количество исполнителей` посредством вызова `событий`.

Пример базовой формы:
```php
namespace Orchid\Foundation\Http\Forms\Systems\Roles;

use Orchid\Forms\FormGroup;
use Orchid\Foundation\Core\Models\Role;
use Orchid\Foundation\Events\Systems\RolesEvent;

class RoleFormGroup extends FormGroup
{
    /**
     * @var
     */
    public $event = RolesEvent::class;

    /**
     * Description Attributes for group.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'        => 'Name',
            'description' => 'description',
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        //Display main form or grid
        return view('');
    }
}

```

### Форма реализации

Форма, на которой данные `сохраняются/обновляются`. Каждая форма имеет свои собственные свойства проверки данных.
Каждая реализующая форма будет запускаться в свою очередь, не зная ничего о предыдущем или последующем.
Запись формы не должна вызывать никаких проблем, поскольку она выглядит как обычный контроллер.

Example:
```php
namespace Orchid\Foundation\Http\Forms\Systems\Roles;

use Orchid\Forms\Form;
use Orchid\Foundation\Core\Models\Role;
use Orchid\Foundation\Facades\Alert;
use Orchid\Foundation\Facades\Dashboard;

class BaseRolesForm extends Form
{
    /**
     * @var string
     */
    public $name = 'General Info';

    /**
     * Base Model.
     *
     * @var
     */
    protected $model = Role::class;

    /**
     * Validation Rules Request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|max:255',
            'slug'        => 'required|max:255',
            'permissions' => 'array',
        ];
    }

    /**
     * Display Settings App.
     *
     * @param Role|null $role
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get()
    {
        //Display form
    }

    /**
     * Save Base Post.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function persist()
    {
        //save action
    }

    /**
     * @param Role $role
     */
    public function delete(Role $role)
    {
        //remove action
    }
}

```

Тогда ваш `controller` будет выглядеть так:

```php
namespace Orchid\Foundation\Http\Controllers\Systems;

use Illuminate\Http\Request;
use Orchid\Foundation\Core\Models\Role;
use Orchid\Foundation\Http\Controllers\Controller;
use Orchid\Foundation\Http\Forms\Systems\Roles\RoleFormGroup;

class RoleController extends Controller
{
    /**
     * @var
     */
    public $form = RoleFormGroup::class;

    /**
     * RoleController constructor.
     */
    public function __construct()
    {
        $this->form = new $this->form();
    }

    /**
     * @return string
     */
    public function index()
    {
        return $this->form->grid();
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return $this->form
            ->route('dashboard.systems.roles.update')
            ->method('POST')
            ->render();
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->form->save();

        return redirect()->route('dashboard.systems.roles.edit', $request->get('slug'));
    }

    /**
     * @param Request $request
     * @param Role    $role
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Role $role)
    {
        $this->form->save($role);

        return redirect()->route('dashboard.systems.roles.edit', $request->get('slug'));
    }

    /**
     * @param Role $role
     *
     * @return mixed
     */
    public function edit(Role $role)
    {
        return $this->form
            ->route('dashboard.systems.roles.update')
            ->slug($role->slug)
            ->method('PUT')
            ->render($role);
    }

    /**
     * @param Role $role
     *
     * @return mixed
     */
    public function destroy(Role $role)
    {
        $this->form->remove($role);

        return redirect()->route('dashboard.systems.roles');
    }
}

```


@endverbatim
