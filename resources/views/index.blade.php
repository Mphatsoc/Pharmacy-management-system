<td style="padding: 0.5rem 0.75rem;">
                <a onclick="return confirm('Are You Sure You want to approve?')" href="{{ url('approved', $riv->id) }}" style="background-color: #10B981; color: #fff; font-weight: 700; font-size: 0.875rem; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">Approve</a>
              </td>
              <td style="padding: 0.5rem 0.75rem;">
                <a onclick="return confirm('Are You Sure You want to Decline?')" href="{{ url('declined', $riv->id) }}" style="background-color: #EF4444; color: #fff; font-weight: 700; font-size: 0.875rem; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">Decline</a>
              </td>