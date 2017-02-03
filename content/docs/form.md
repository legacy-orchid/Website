---
view::extends: _includes.docs_post_base
view::yields: post_body
pageTitle: - Формы
---
@verbatim
#Формы
----------
 
Форма это независимая часть приложения, которая берёт на себя функцию контроллера и служит для реализации CRUD.

В Orchid существуют формы двух видов: 
1. Базовая
1. Реализующая


###Базовая форма

Базовая форма отличается от реализующей только тем, что к ней можно `подключать неограниченное число реализующих`, по средством вызова `события`.

Пример базовой формы:
```php
<?php

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
            'name'        => 'Роли',
            'description' => 'Разделение прав доступа',
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function main()
    {
        $role = new Role();
        $roles = $role->select('name', 'slug', 'created_at')->paginate();

        return view('dashboard::container.systems.roles.grid', [
            'roles' => $roles,
        ]);
    }
}

```

###Реализующая форма

Форма на которой происходит `сохранение/обновление` данных. Заметье, что форма иммеет собственные свойства валидации.
Каждая реализующая форма будет запускаться по очереди не зная ничего о предыдущей или последующей.
Написание формы не должно вызвать никаких затруднений, так как он имеет вид обычного контроллера.

Пример:
```php
<?php

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
            'name'        => 'required|max:255|unique:roles,name,'.$this->request->get('name').',name',
            'slug'        => 'required|max:255|unique:roles,slug,'.$this->request->get('slug').',slug',
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
    public function get(Role $role = null)
    {
        if (!is_null($role)) {
            $rolePermission = $role->permissions;
            $permission = Dashboard::getPermission();
            $permission->transform(function ($array) use ($rolePermission) {
                foreach ($array as $key => $value) {
                    $array[$key]['active'] = array_key_exists($value['slug'], $rolePermission);
                }

                return $array;
            });
        } else {
            $permission = Dashboard::getPermission();
        }

        return view('dashboard::container.systems.roles.info', [
            'permission' => $permission,
            'role'       => $role,
        ]);
    }

    /**
     * Save Base Role.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function persist()
    {
        $role = Role::firstOrNew([
            'slug' => $this->request->get('slug'),
        ]);
        $role->fill($this->request->all());
        $role->permissions = $this->request->get('permissions') ?: [];

        $role->save();
        Alert::success('Message');
    }

    /**
     * @param Role $role
     */
    public function delete(Role $role)
    {
        $role->delete();
        Alert::success('Message');
    }
}

```


Тогда ваш `контроллер` будет выглядеть приблизительно так:

```php
<?php

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
